<?php

/*
    Yemeksepeti.com Company List Scraper
    
     Warning!
     It is prepared for statistical research.
     Using it for commercial purposes may cause legal problems.

     @yasinkuyu, 2021
*/

ini_set('max_execution_time', '500'); // for infinite time of execution 

error_reporting(E_ERROR | E_PARSE);
header("Content-Type: text/html; charset=utf-8");

class YemekSepetiApi {

    public $pageSize = 1000;
    public $debug = false;
 
    public $city_url = "https://www.yemeksepeti.com/tekirdag/corlu-alipasa-mah#ors:false"; // -all-regions#ors:false
    public $search_url = "https://gate.yemeksepeti.com/discovery/api/v1/Restaurant/search?PageNumber=1&SortField=5&SortDirection=0&OpenOnly=false&AreaId={AreaId}&PageSize={PageSize}";
    
    private $restaurant_exists = array();
    private $restaurants = array();

    public function get(){

        $data = $this->getData($this->city_url);
        
        $doc = new DOMDocument;
        $doc->loadHTML($data);
        
        $xpath = new DOMXPath($doc);
        $nodes = $xpath->query('//select[@id="ys-areaSelector"]//option');
        
        preg_match_all('/<script src="\/resources\/globals\?(.*?)"><\/script>/mi', $data, $resources, PREG_SET_ORDER, 0);
        
        $resource_url = "https://www.yemeksepeti.com/resources/globals?{$resources[0][1]}";
        $resource_data = $this->getData($resource_url);
        
        preg_match_all('/"OauthAnonymToken":"(.*)","ContinueAnonymous"/mi', $resource_data, $OauthAnonymToken, PREG_SET_ORDER, 0);
        preg_match_all('/"CatalogName":"(.*?)"/mi', $resource_data, $CatalogName, PREG_SET_ORDER, 0);
        
        $i = 0;

        $this->restaurant_exists = array();
        $this->restaurants = array();
         
        foreach ($nodes as $key => $value) {
        
            $areaId = $value->getAttribute("value");
            $areaName = $value->textContent;
            
            $this->search_url = str_replace("{AreaId}", $areaId, $this->search_url);
            $this->search_url = str_replace("{PageSize}", $this->pageSize, $this->search_url);
        
            if($this->debug){
                echo "{$areaId} {$areaName} {$this->search_url}" . PHP_EOL;
            }
        
            $head = array(
                "content-type: application/json;charset=UTF-8",
                "referer: https://www.yemeksepeti.com/",
                "accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7",
                "authorization: Bearer {$OauthAnonymToken[0][1]}",
                "content-type: application/json;charset=UTF-8",
                "ys-catalog: {$CatalogName[0][1]}",
                "ys-culture: tr-TR"
            );
            
            $json = json_decode($this->getData($this->search_url, $head));
        
            $results = isset($json->Data->Result) ? $json->Data->Result : []; 
         
            foreach ($results as $key => $item) {
        
                if(!in_array($item->displayName, $this->restaurant_exists)){

                    if($this->debug){
                        echo $item->areaName . "" . $item->DisplayName . PHP_EOL;;
                    }

                    $this->restaurant_exists[] = $item->DisplayName;

                    $this->restaurants[$key]["id"] = $key;
                    $this->restaurants[$key]["AreaName"] = $item->areaName;
                    $this->restaurants[$key]["DisplayName"] = $item->DisplayName;
                    $this->restaurants[$key]["MainCuisineName"] = $item->MainCuisineName;
                    $this->restaurants[$key]["CatalogName"] = $item->CatalogName;
                    $this->restaurants[$key]["IsOpen"] = $item->IsOpen;
                    $this->restaurants[$key]["IsNew"] = $item->IsNew;
                }
            }
        
            // if($i > 4) { break; } $i++;
           
        }
            
    }

    public function json(){
        header("Content-Type:application/json; charset=utf-8"); 

        $this->get();

        echo json_encode($this->restaurants);
    }

    public function csv(){

        $this->get();

        $output = fopen("php://output",'w') or die("Can't open php://output");
        
        header('Content-Encoding: UTF-8');
        header("Content-Type:application/csv; charset=utf-8"); 
        header("Content-Disposition:attachment;filename=yemeksepeti_company_list.csv"); 
        header('Content-Transfer-Encoding: binary');
        
        fputcsv($output, array('id', 'AreaName', 'DisplayName', 'MainCuisineName', 'CatalogName', 'IsOpen', 'IsNew'));
        
        foreach($this->restaurants as $product) {
            fputcsv($output, $product);
        }
        
        fclose($output) or die("Can't close php://output");
    }

    private function getData($url, $head = array()){
        $ch = curl_init();
    
        $tmpfname = dirname(__FILE__).'/cookie.txt';
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $tmpfname);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $tmpfname);
        curl_setopt( $ch, CURLOPT_COOKIESESSION, true );
    
        if($head){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        }
    
        $data = curl_exec($ch);
    
        curl_close($ch);
    
        return $data;
    }

    public function setDebug($mode){
        $this->debug = $mode;
    }
 
    public function setCityUrl($city_url){
        $this->city_url = $city_url;
    }

}
