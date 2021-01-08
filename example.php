<?php

require "yemeksepeti_api.php";

$api = new YemekSepetiApi();
$api->setCityUrl("https://www.yemeksepeti.com/tekirdag/corlu-alipasa-mah#ors:false");
$api->json();
