# YemekSepetiApi
Yemeksepeti.com Company List (JSON or CSV)

    require "yemeksepeti_api.php";

    $api = new YemekSepetiApi();
    $api->setCityUrl("https://www.yemeksepeti.com/tekirdag/corlu-alipasa-mah#ors:false");
    $api->json();

# Debug mode
    $api->setDebug(true);

# CSV output
    $api->csv();

# Json output
    $api->json();

# json output 

    [
        {
            "id": 0,
            "AreaName": null,
            "DisplayName": "Baba Dostu Meşhur Erzurum Cağ Kebabı, Süleymanpaşa (Hürriyet Mah. - Dereağzı Mevkii)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 1,
            "AreaName": null,
            "DisplayName": "Acil Osmanlı Pizza & Burger, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 2,
            "AreaName": null,
            "DisplayName": "Su Döner, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 3,
            "AreaName": null,
            "DisplayName": "Bahanesi Kokoreç, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 4,
            "AreaName": null,
            "DisplayName": "Limon Kabuğu, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 5,
            "AreaName": null,
            "DisplayName": "Pera Villa, Kapaklı (İsmet Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 6,
            "AreaName": null,
            "DisplayName": "Bizimle Çiğ Köfte, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 7,
            "AreaName": null,
            "DisplayName": "Afiyet Çiğ Köfte, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 8,
            "AreaName": null,
            "DisplayName": "Canım Ciğerim, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 9,
            "AreaName": null,
            "DisplayName": "Big Yellow Taxi Benzin, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 10,
            "AreaName": null,
            "DisplayName": "Güzeloğlu Kokoreç, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 11,
            "AreaName": null,
            "DisplayName": "Yediyaman Çiğ Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 12,
            "AreaName": null,
            "DisplayName": "Atamer Fast Food, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 13,
            "AreaName": null,
            "DisplayName": "Ahmet Usta Mersin Tantuni, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 14,
            "AreaName": null,
            "DisplayName": "Hatay Döner & Dürüm & İskender, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 15,
            "AreaName": null,
            "DisplayName": "Şirin Kokoreç, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 16,
            "AreaName": null,
            "DisplayName": "Sönmez Dürüm Evi, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 17,
            "AreaName": null,
            "DisplayName": "Mu-hit Burger, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 18,
            "AreaName": null,
            "DisplayName": "Selimin Yeri, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 19,
            "AreaName": null,
            "DisplayName": "Yüzüncü Yıl Kebap & Pide, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 20,
            "AreaName": null,
            "DisplayName": "Pera Villa, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 21,
            "AreaName": null,
            "DisplayName": "Star Kokoreç, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 22,
            "AreaName": null,
            "DisplayName": "Jedi Burger, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 23,
            "AreaName": null,
            "DisplayName": "The Welly, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 24,
            "AreaName": null,
            "DisplayName": "Kahta Arsames, Çerkezköy (Fevzipaşa Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 25,
            "AreaName": null,
            "DisplayName": "Hürriyet Cafe, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 26,
            "AreaName": null,
            "DisplayName": "Çınarlı Köşk Kır Kahvesi, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 27,
            "AreaName": null,
            "DisplayName": "Kardeşler Döner Yeni Lezzet, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 28,
            "AreaName": null,
            "DisplayName": "Mispak Su, Çorlu (Merkez)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 29,
            "AreaName": null,
            "DisplayName": "Hamur-et, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 30,
            "AreaName": null,
            "DisplayName": "Bizimle Çiğ Köfte, Süleymanpaşa (Zafer Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 31,
            "AreaName": null,
            "DisplayName": "Limon Cafe & Fast Food, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 32,
            "AreaName": null,
            "DisplayName": "Usta Dönerci, Tekirdağ (Merkez)",
            "MainCuisineName": "Usta Dönerci",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 33,
            "AreaName": null,
            "DisplayName": "Gaziantep Üstad-ı Künefe Anteplioğlu, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 34,
            "AreaName": null,
            "DisplayName": "Hayat Su, Malkara (Cami Atik Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 35,
            "AreaName": null,
            "DisplayName": "Hayat Su, Şarköy (İstiklal Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 36,
            "AreaName": null,
            "DisplayName": "Konyalım Pide & Kebap & Lahmacun, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 37,
            "AreaName": null,
            "DisplayName": "Nur Sultan Kebap Mahmut Usta, Süleymanpaşa (Namık Kemal Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 38,
            "AreaName": null,
            "DisplayName": "Ülker Kokoreç, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 39,
            "AreaName": null,
            "DisplayName": "Satır Kokoreç, Çorlu (Rumeli Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 40,
            "AreaName": null,
            "DisplayName": "Çiğköftem, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 41,
            "AreaName": null,
            "DisplayName": "Starbucks Coffee, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Kahve",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 42,
            "AreaName": null,
            "DisplayName": "Egemen Fast & Food, Ergene (Cumhuriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 43,
            "AreaName": null,
            "DisplayName": "Pika Pika Food, Çorlu (Rumeli Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 44,
            "AreaName": null,
            "DisplayName": "Faruk Güllüoğlu, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 45,
            "AreaName": null,
            "DisplayName": "Demhane Ocakbaşı, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 46,
            "AreaName": null,
            "DisplayName": "Ambrosia Cafe, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 47,
            "AreaName": null,
            "DisplayName": "Faruk Güllüoğlu, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 48,
            "AreaName": null,
            "DisplayName": "Afacan, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 49,
            "AreaName": null,
            "DisplayName": "Patron XL, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 50,
            "AreaName": null,
            "DisplayName": "Hamidiye Su, Şarköy (İstiklal Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 51,
            "AreaName": null,
            "DisplayName": "Gırgır, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 52,
            "AreaName": null,
            "DisplayName": "Zest Lunch & Dinner, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 53,
            "AreaName": null,
            "DisplayName": "Beyaz Bahçe, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 54,
            "AreaName": null,
            "DisplayName": "Kokoreççi Ahmet Usta, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 55,
            "AreaName": null,
            "DisplayName": "Ateş Et & Tavuk, Ergene (Sağlık Mah.)",
            "MainCuisineName": "Tavuk",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 56,
            "AreaName": null,
            "DisplayName": "Gazi Künefe & Kadayıf, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 57,
            "AreaName": null,
            "DisplayName": "Velimeşe Bozacısı Önder, Çerkezköy (Veliköy Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 58,
            "AreaName": null,
            "DisplayName": "Palais Pasta & Cafe & Restaurant, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 59,
            "AreaName": null,
            "DisplayName": "Jonathan Cafe, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 60,
            "AreaName": null,
            "DisplayName": "Çiçek Pide & Börek, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 61,
            "AreaName": null,
            "DisplayName": "Valens, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 62,
            "AreaName": null,
            "DisplayName": "Memoli Döner, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 63,
            "AreaName": null,
            "DisplayName": "Evim Ev Yemekleri, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 64,
            "AreaName": null,
            "DisplayName": "Cızz Bızz Izgara Fast & Food, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 65,
            "AreaName": null,
            "DisplayName": "Dede Börek, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 66,
            "AreaName": null,
            "DisplayName": "Tepe Börek, Süleymanpaşa (100. Yıl Mah.- Üst Yol)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 67,
            "AreaName": null,
            "DisplayName": "Cihan Lokantası, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 68,
            "AreaName": null,
            "DisplayName": "Şehr-i Sanat Baklavacısı, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 69,
            "AreaName": null,
            "DisplayName": "Can Diyar Döner, Çerkezköy (Kızılpınar Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 70,
            "AreaName": null,
            "DisplayName": "Memleketim Yemek, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 71,
            "AreaName": null,
            "DisplayName": "Karbeyaz Restaurant, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 72,
            "AreaName": null,
            "DisplayName": "Ali Baba Kokoreç, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 73,
            "AreaName": null,
            "DisplayName": "Döner Noktası, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 74,
            "AreaName": null,
            "DisplayName": "Öz Paşam Döner, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 75,
            "AreaName": null,
            "DisplayName": "Erikli Nestle Su, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 76,
            "AreaName": null,
            "DisplayName": "Tostçum, Çorlu (Cemaliye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 77,
            "AreaName": null,
            "DisplayName": "KFC, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "KFC",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 78,
            "AreaName": null,
            "DisplayName": "Osmanlı Pizza, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 79,
            "AreaName": null,
            "DisplayName": "Ayyıldız Aparatif, Süleymanpaşa (Ertuğrul Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 80,
            "AreaName": null,
            "DisplayName": "CBC Barbekü Et Mangal & Bistro, Ergene (Sağlık Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 81,
            "AreaName": null,
            "DisplayName": "Chef Hamur Adam, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 82,
            "AreaName": null,
            "DisplayName": "Kumbağ Çorba & Köfte, Süleymanpaşa (Kumbağ Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 83,
            "AreaName": null,
            "DisplayName": "Köz Döner & Pide & Lahmacun, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 84,
            "AreaName": null,
            "DisplayName": "Burger King, Çorlu (Muhittin Mah. - Ömürtak Cad.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 85,
            "AreaName": null,
            "DisplayName": "Pera Villa, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 86,
            "AreaName": null,
            "DisplayName": "Edirne Tava Ciğer, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 87,
            "AreaName": null,
            "DisplayName": "Burger King, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 88,
            "AreaName": null,
            "DisplayName": "Rumeli Mangal, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 89,
            "AreaName": null,
            "DisplayName": "Blossom Lokma Mix, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Lokma",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 90,
            "AreaName": null,
            "DisplayName": "Usta Dönerci, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Usta Dönerci",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 91,
            "AreaName": null,
            "DisplayName": "Popeyes, Tekirdağ (Merkez)",
            "MainCuisineName": "Popeyes",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 92,
            "AreaName": null,
            "DisplayName": "Burger King, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 93,
            "AreaName": null,
            "DisplayName": "Çıtır Usta, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 94,
            "AreaName": null,
            "DisplayName": "Et-Mi Kebap, Kapaklı (İsmet Paşa Mah. - Org. Emlak Konukları)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 95,
            "AreaName": null,
            "DisplayName": "Trakya Döner, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 96,
            "AreaName": null,
            "DisplayName": "Helvacı Ali, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 97,
            "AreaName": null,
            "DisplayName": "Şırdancı Cio, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 98,
            "AreaName": null,
            "DisplayName": "Osmanlı Döner & Dürüm, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 99,
            "AreaName": null,
            "DisplayName": "Pideland Kanat & Kebap & Sulu Yemek, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 100,
            "AreaName": null,
            "DisplayName": "Aadress Fast & Food, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 101,
            "AreaName": null,
            "DisplayName": "Öz Üçler Pide & Kebap, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 102,
            "AreaName": null,
            "DisplayName": "Burger King, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 103,
            "AreaName": null,
            "DisplayName": "Üstat Lokantası, Çorlu (Cemaliye Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 104,
            "AreaName": null,
            "DisplayName": "Faruk Güllüoğlu, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 105,
            "AreaName": null,
            "DisplayName": "İrem Döner, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 106,
            "AreaName": null,
            "DisplayName": "Burger King, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 107,
            "AreaName": null,
            "DisplayName": "Class Döner & İskender, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 108,
            "AreaName": null,
            "DisplayName": "Kadriye'nin Kafeteryası, Çerkezköy (Yıldırım Beyazıt Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 109,
            "AreaName": null,
            "DisplayName": "Burger Dükkanı, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 110,
            "AreaName": null,
            "DisplayName": "Özcan Kardeşler Odun Ateşinde Döner, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 111,
            "AreaName": null,
            "DisplayName": "Çiftlikönü Kebap & Pide & Lahmacun, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 112,
            "AreaName": null,
            "DisplayName": "Hayat Su, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 113,
            "AreaName": null,
            "DisplayName": "Aile Lahmacun & Pide, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 114,
            "AreaName": null,
            "DisplayName": "Oğuzlar Döner, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 115,
            "AreaName": null,
            "DisplayName": "Adıyamanlı Çiğköfteci Ali Baba, Çorlu (Çobançeşme Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 116,
            "AreaName": null,
            "DisplayName": "İnci Börek, Çorlu (Hatip Mah.)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 117,
            "AreaName": null,
            "DisplayName": "McDonald's, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "McDonald's",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 118,
            "AreaName": null,
            "DisplayName": "Las Vegas, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 119,
            "AreaName": null,
            "DisplayName": "Çerkezköy Halil Ibrahim Sofrası, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 120,
            "AreaName": null,
            "DisplayName": "Kumru Baba, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 121,
            "AreaName": null,
            "DisplayName": "Çıtır Lahmacun, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 122,
            "AreaName": null,
            "DisplayName": "Ömür Et Mangal, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Steak",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 123,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 124,
            "AreaName": null,
            "DisplayName": "Taksim Çiğ Köfte, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 125,
            "AreaName": null,
            "DisplayName": "Dünya Döner, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 126,
            "AreaName": null,
            "DisplayName": "Keyf-i Fırın, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 127,
            "AreaName": null,
            "DisplayName": "Cömert Kebap, Saray (Ayaspaşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 128,
            "AreaName": null,
            "DisplayName": "Cake's Cardinal Kumpir & Waffle, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kumpir",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 129,
            "AreaName": null,
            "DisplayName": "Dönerist Tavuk İskender & Kokoreç & Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 130,
            "AreaName": null,
            "DisplayName": "Kokoreç Delisi, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 131,
            "AreaName": null,
            "DisplayName": "Berlin Döner, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 132,
            "AreaName": null,
            "DisplayName": "Öz Urfa Kebap Pide & Lahmacun, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 133,
            "AreaName": null,
            "DisplayName": "LokMaffle, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Lokma",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 134,
            "AreaName": null,
            "DisplayName": "Snorlax Fast Food, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 135,
            "AreaName": null,
            "DisplayName": "Burger King, Kapaklı (İsmet Paşa Mah.)",
            "MainCuisineName": "Burger King",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 136,
            "AreaName": null,
            "DisplayName": "Şef Pide & Lahmacun, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 137,
            "AreaName": null,
            "DisplayName": "Gurme Cafe, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 138,
            "AreaName": null,
            "DisplayName": "Canım Ciğerim, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 139,
            "AreaName": null,
            "DisplayName": "Cadde Katık, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 140,
            "AreaName": null,
            "DisplayName": "İstanbul Çorba, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 141,
            "AreaName": null,
            "DisplayName": "Canım Ciğerim, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 142,
            "AreaName": null,
            "DisplayName": "Full Lahmacun & Pide & Kebap, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 143,
            "AreaName": null,
            "DisplayName": "Faruk Güllüoğlu, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Pastane & Fırın",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 144,
            "AreaName": null,
            "DisplayName": "Kokoreç Atölyesi Plus, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 145,
            "AreaName": null,
            "DisplayName": "Popeyes, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Popeyes",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 146,
            "AreaName": null,
            "DisplayName": "Akkuş Kebap & Pide & Lahmacun, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 147,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 148,
            "AreaName": null,
            "DisplayName": "Meşhur İzmir Kumrucusu, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 149,
            "AreaName": null,
            "DisplayName": "Taksim Çiğ Köfte, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 150,
            "AreaName": null,
            "DisplayName": "Büyük İskender Kebapçısı, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 151,
            "AreaName": null,
            "DisplayName": "İzabella Pizza, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 152,
            "AreaName": null,
            "DisplayName": "Baba Burger, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 153,
            "AreaName": null,
            "DisplayName": "Kral Urfa Kebap & Pide & Lahmacun, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 154,
            "AreaName": null,
            "DisplayName": "Şanlıurfa İskender, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 155,
            "AreaName": null,
            "DisplayName": "Pideland 59, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 156,
            "AreaName": null,
            "DisplayName": "Osmanlı Mutfağı, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 157,
            "AreaName": null,
            "DisplayName": "Kanaat Pide & Lahmacun, Marmara Ereğlisi (Yeni Çiftlik Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 158,
            "AreaName": null,
            "DisplayName": "Bey Döner, Çerkezköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 159,
            "AreaName": null,
            "DisplayName": "Yakamoz Döner, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 160,
            "AreaName": null,
            "DisplayName": "Acıktım Ulaa, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 161,
            "AreaName": null,
            "DisplayName": "Can Ev Yemekleri & Kahvaltı, Çerkezköy (Yıldırım Beyazıt Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 162,
            "AreaName": null,
            "DisplayName": "Kat Döner & Tantuni, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 163,
            "AreaName": null,
            "DisplayName": "Coi Pizzeria & İtalian Food, Ergene (Sağlık Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 164,
            "AreaName": null,
            "DisplayName": "By Döner, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 165,
            "AreaName": null,
            "DisplayName": "Lokmagma Waffle & Künefe, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Lokma",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 166,
            "AreaName": null,
            "DisplayName": "Midyeci Veysi Kokoreç & Sucuk & Köfte, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 167,
            "AreaName": null,
            "DisplayName": "Taş Fırın 63, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 168,
            "AreaName": null,
            "DisplayName": "Asil Çiğ Köfte & Tost & Islak Hamburger, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 169,
            "AreaName": null,
            "DisplayName": "Dürümcü Hüseyin Usta, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 170,
            "AreaName": null,
            "DisplayName": "Ottoman Cafe & Restaurant, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 171,
            "AreaName": null,
            "DisplayName": "Anadolu Sofrası Restaurant & Cafe, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 172,
            "AreaName": null,
            "DisplayName": "Kafes Midye & Kokoreç, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 173,
            "AreaName": null,
            "DisplayName": "Park 326 Hatay Döner, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 174,
            "AreaName": null,
            "DisplayName": "Doping Kokoreç, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 175,
            "AreaName": null,
            "DisplayName": "Ciğerci Veysel, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 176,
            "AreaName": null,
            "DisplayName": "Pınar Fast & Food, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 177,
            "AreaName": null,
            "DisplayName": "OburX Döner, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 178,
            "AreaName": null,
            "DisplayName": "Memoli Döner, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 179,
            "AreaName": null,
            "DisplayName": "Mançiz, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 180,
            "AreaName": null,
            "DisplayName": "Salad Box, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 181,
            "AreaName": null,
            "DisplayName": "Nazar Kasap Ekspress, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 182,
            "AreaName": null,
            "DisplayName": "Pilav Y, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Pilav",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 183,
            "AreaName": null,
            "DisplayName": "Bi Mola Fast Food, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 184,
            "AreaName": null,
            "DisplayName": "Kokoreç Atölyesi, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 185,
            "AreaName": null,
            "DisplayName": "Haylaz Döner, Çorlu (Cemaliye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 186,
            "AreaName": null,
            "DisplayName": "Kardelen 2 Kebap & Pide & Döner, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 187,
            "AreaName": null,
            "DisplayName": "Ergenler Pizza & Kebap & Lahmacun, Süleymanpaşa (Namık Kemal Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 188,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 189,
            "AreaName": null,
            "DisplayName": "Sen & Ben Fast Food, Süleymanpaşa (Turgut Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 190,
            "AreaName": null,
            "DisplayName": "Şanlıurfa Lahmacun & Pide & Döner , Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 191,
            "AreaName": null,
            "DisplayName": "Mercan Döner Kokoreç, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 192,
            "AreaName": null,
            "DisplayName": "Miss Dürüm Evi, Kapaklı (İsmet Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 193,
            "AreaName": null,
            "DisplayName": "Şanlıurfa Sofrası, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 194,
            "AreaName": null,
            "DisplayName": "Prestij Kampüs Pizza, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 195,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 196,
            "AreaName": null,
            "DisplayName": "Bereketli Döner & Köfte & Kokoreç & Çorba, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 197,
            "AreaName": null,
            "DisplayName": "Pizza Dükkanı, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 198,
            "AreaName": null,
            "DisplayName": "Şanlı Fırın Kebap & Lahmacun, Ergene (Yeşiltepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 199,
            "AreaName": null,
            "DisplayName": "Mmola, Çerkezköy (Fevzipaşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 200,
            "AreaName": null,
            "DisplayName": "Dönerist Tavuk İskender 2, Çorlu (Rumeli Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 201,
            "AreaName": null,
            "DisplayName": "Kıvanç Pide Kebap, Şarköy (İstiklal Mah. - Sahil)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 202,
            "AreaName": null,
            "DisplayName": "Kuzum Kokoreç & Piliç Çevirme, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 203,
            "AreaName": null,
            "DisplayName": "Öztürk Kokoreç, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 204,
            "AreaName": null,
            "DisplayName": "Konyalı Ufuk Usta, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 205,
            "AreaName": null,
            "DisplayName": "Öz Diyar Döner & İskender, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 206,
            "AreaName": null,
            "DisplayName": "Meşhur İzmir Kumrucusu, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 207,
            "AreaName": null,
            "DisplayName": "Tost Garden, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 208,
            "AreaName": null,
            "DisplayName": "Hane Kokoreç, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 209,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 210,
            "AreaName": null,
            "DisplayName": "Etbeyi Kasap & Izgara, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 211,
            "AreaName": null,
            "DisplayName": "Lahmacun Sarayı, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 212,
            "AreaName": null,
            "DisplayName": "Diyar Döner, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 213,
            "AreaName": null,
            "DisplayName": "Şımarık Döner, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 214,
            "AreaName": null,
            "DisplayName": "Diyar Kebap, Süleymanpaşa (Ertuğrul Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 215,
            "AreaName": null,
            "DisplayName": "Meşhur Sarıyer Börekçisi, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 216,
            "AreaName": null,
            "DisplayName": "Arby's, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Arby's",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 217,
            "AreaName": null,
            "DisplayName": "Ergenler Cafe & Restaurant, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 218,
            "AreaName": null,
            "DisplayName": "Very Waffle & Kumpir, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Waffle",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 219,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 220,
            "AreaName": null,
            "DisplayName": "La Casa Kebap, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 221,
            "AreaName": null,
            "DisplayName": "Şar Gurme, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 222,
            "AreaName": null,
            "DisplayName": "Dürüm Bey., Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 223,
            "AreaName": null,
            "DisplayName": "Katık'çı Döner, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 224,
            "AreaName": null,
            "DisplayName": "Aras Döner & Kokoreç, Ergene (Sağlık Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 225,
            "AreaName": null,
            "DisplayName": "Ham-Burger, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 226,
            "AreaName": null,
            "DisplayName": "Balkan Piliç, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 227,
            "AreaName": null,
            "DisplayName": "Altınova Lokantası, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 228,
            "AreaName": null,
            "DisplayName": "Helvacı Ali, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 229,
            "AreaName": null,
            "DisplayName": "Acıktım Döner & Köfte & Kokoreç & Çorba, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 230,
            "AreaName": null,
            "DisplayName": "Şehr-i Sanat Baklavacısı, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 231,
            "AreaName": null,
            "DisplayName": "Kowboy Büfe, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 232,
            "AreaName": null,
            "DisplayName": "Hürriyet Kebap & Lahmacun & Pide & Tava, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 233,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 234,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 235,
            "AreaName": null,
            "DisplayName": "Şanlıurfa Osmanlı Kebap, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 236,
            "AreaName": null,
            "DisplayName": "Unrivaled Cafe & Restaurant, Kapaklı (İsmet Paşa Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 237,
            "AreaName": null,
            "DisplayName": "Memoli Döner, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 238,
            "AreaName": null,
            "DisplayName": "Meşhur Adıyaman Çiğ Köftecisi Ömer Aybak, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 239,
            "AreaName": null,
            "DisplayName": "Yoncalı Çay Evi & Tost, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Pilav",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 240,
            "AreaName": null,
            "DisplayName": "Cengiz Mersin Tantuni, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 241,
            "AreaName": null,
            "DisplayName": "Jimmy Joker Cafe & Restaurant, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 242,
            "AreaName": null,
            "DisplayName": "Urfa Sofrası, Şarköy (İstiklal Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 243,
            "AreaName": null,
            "DisplayName": "Pitt Burger, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 244,
            "AreaName": null,
            "DisplayName": "Fast Food Atölyesi, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 245,
            "AreaName": null,
            "DisplayName": "Mahir Kebap Pide & Lahmacun, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 246,
            "AreaName": null,
            "DisplayName": "Konsolos Fast & Food, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 247,
            "AreaName": null,
            "DisplayName": "Karadeniz Pide & Adana Mutfağı, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 248,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Bağlık Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 249,
            "AreaName": null,
            "DisplayName": "Pidem 59 Konya Mutfağı, Süleymanpaşa (100. Yıl Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 250,
            "AreaName": null,
            "DisplayName": "Şahane Döner, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 251,
            "AreaName": null,
            "DisplayName": "Şirinler Döner & Dürüm, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 252,
            "AreaName": null,
            "DisplayName": "Hayrabolu Börek & Pide & Pizza, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 253,
            "AreaName": null,
            "DisplayName": "Lamir Döner & Kokoreç & Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 254,
            "AreaName": null,
            "DisplayName": "Ata Balık, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 255,
            "AreaName": null,
            "DisplayName": "Asaftat Anteplioğlu, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 256,
            "AreaName": null,
            "DisplayName": "Öz Adana Ocakbaşı Kenan Usta, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 257,
            "AreaName": null,
            "DisplayName": "Çınarlı Pide & Lahmacun, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 258,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Şarköy (İstiklal Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 259,
            "AreaName": null,
            "DisplayName": "Konya Mevlana Sofrası, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 260,
            "AreaName": null,
            "DisplayName": "Barış Balıkçılık, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 261,
            "AreaName": null,
            "DisplayName": "Basri Piknik, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 262,
            "AreaName": null,
            "DisplayName": "Adıyamanlı Çiğ Köfteci Erkan Usta, Süleymanpaşa (Zafer Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 263,
            "AreaName": null,
            "DisplayName": "Karacılar Balık Evi, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 264,
            "AreaName": null,
            "DisplayName": "Kebap Dünyası İlhan Usta, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 265,
            "AreaName": null,
            "DisplayName": "Ciğerci Ramazan, Kapaklı (Atatürk Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 266,
            "AreaName": null,
            "DisplayName": "Afc Chicken, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Tavuk",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 267,
            "AreaName": null,
            "DisplayName": "Bi Mola Ocakbaşı Kebap & Lahmacun, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 268,
            "AreaName": null,
            "DisplayName": "Köfteci Ayhan Köfte & Kumru & Sucuk, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 269,
            "AreaName": null,
            "DisplayName": "Beyzade Kebap & Lahmacun, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 270,
            "AreaName": null,
            "DisplayName": "Kumpir Box, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Tavuk",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 271,
            "AreaName": null,
            "DisplayName": "Meşhur Mersin Tantuni & Köfte, Süleymanpaşa (Ertuğrul Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 272,
            "AreaName": null,
            "DisplayName": "Very Tantuni & Sucuk & Köfte, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 273,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Kapaklı (Atatürk Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 274,
            "AreaName": null,
            "DisplayName": "Kowboy Büfe, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 275,
            "AreaName": null,
            "DisplayName": "Ece Fast & Food, Süleymanpaşa (Hürriyet Mah. - Baykallar Mevkii)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 276,
            "AreaName": null,
            "DisplayName": "Çorlu Âlâ Restoran, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 277,
            "AreaName": null,
            "DisplayName": "Adana Drm, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 278,
            "AreaName": null,
            "DisplayName": "Usta Dönerci, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Usta Dönerci",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 279,
            "AreaName": null,
            "DisplayName": "Gala Kokoreç, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 280,
            "AreaName": null,
            "DisplayName": "Pizza'cım, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 281,
            "AreaName": null,
            "DisplayName": "Közde Piliç, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 282,
            "AreaName": null,
            "DisplayName": "Serinoğulları Et Lokantası & Tekirdağ Köftecisi, Süleymanpaşa (Hürriyet Mah. - Dereağzı Mevkii)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 283,
            "AreaName": null,
            "DisplayName": "Konya Meram Etli Ekmek & Pide, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 284,
            "AreaName": null,
            "DisplayName": "Değirmenaltı Kürek Lahmacun, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 285,
            "AreaName": null,
            "DisplayName": "Şampiyon Kokoreç, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 286,
            "AreaName": null,
            "DisplayName": "Yeni Öz Urfa Lahmacun & Kebap, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 287,
            "AreaName": null,
            "DisplayName": "Döneraltı Pilavlandın, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pilav",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 288,
            "AreaName": null,
            "DisplayName": "Ciğerin Kalbi, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 289,
            "AreaName": null,
            "DisplayName": "Adanalı Dürümcü Ali Usta, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 290,
            "AreaName": null,
            "DisplayName": "Gönül Fırını & Pizza, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pastane & Fırın",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 291,
            "AreaName": null,
            "DisplayName": "City Waffle & Kumpir, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Waffle",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 292,
            "AreaName": null,
            "DisplayName": "Kıvanç Pide & Döner & Lahmacun, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 293,
            "AreaName": null,
            "DisplayName": "Costa 59, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 294,
            "AreaName": null,
            "DisplayName": "İlker Balıkçılık, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 295,
            "AreaName": null,
            "DisplayName": "Tosthane, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 296,
            "AreaName": null,
            "DisplayName": "Tepe Piliç Çevirme & Kokoreç, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 297,
            "AreaName": null,
            "DisplayName": "Adanalım Kebap & Dürüm Emrah Usta, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 298,
            "AreaName": null,
            "DisplayName": "Hayat Su, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 299,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 300,
            "AreaName": null,
            "DisplayName": "Akçaabat Köfte Zıgana & Karadeniz Pide, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 301,
            "AreaName": null,
            "DisplayName": "Tekeli Çorba & Kebap & Lahmacun, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 302,
            "AreaName": null,
            "DisplayName": "Değirmen Cafe, Şarköy (İstiklal Mah. - Sahil)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 303,
            "AreaName": null,
            "DisplayName": "Tavukhane, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Tavuk",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 304,
            "AreaName": null,
            "DisplayName": "Aba Tantuni & Döner, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 305,
            "AreaName": null,
            "DisplayName": "Dünya Döner & Sulu Yemek, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 306,
            "AreaName": null,
            "DisplayName": "Fırın Home, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 307,
            "AreaName": null,
            "DisplayName": "Çorlu Divan Ocakbaşı, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 308,
            "AreaName": null,
            "DisplayName": "Özer Kokoreç & Sucuk & Ciğer, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 309,
            "AreaName": null,
            "DisplayName": "Şerifoğlu Cafe & Restaurant, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 310,
            "AreaName": null,
            "DisplayName": "Tokoçin, Çerkezköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 311,
            "AreaName": null,
            "DisplayName": "Gaziantep Fıstık Künefe, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 312,
            "AreaName": null,
            "DisplayName": "Şımarık Döner, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 313,
            "AreaName": null,
            "DisplayName": "Ata Dondurma, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Dondurma",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 314,
            "AreaName": null,
            "DisplayName": "Kristal Lokantası, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 315,
            "AreaName": null,
            "DisplayName": "Cadde Burger, Şarköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 316,
            "AreaName": null,
            "DisplayName": "Santral Kokoreç, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 317,
            "AreaName": null,
            "DisplayName": "Kardeşler Pide, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 318,
            "AreaName": null,
            "DisplayName": "Brokolini Pizza & Taze Makarna, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 319,
            "AreaName": null,
            "DisplayName": "Prestij Pizza & Burger, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 320,
            "AreaName": null,
            "DisplayName": "M.C Et Döner, Kapaklı (Atatürk Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 321,
            "AreaName": null,
            "DisplayName": "Beyzade Kebap, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 322,
            "AreaName": null,
            "DisplayName": "Acıktım Burger & Cafe, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 323,
            "AreaName": null,
            "DisplayName": "Meşhur Kokoreççi Eray Usta, Kapaklı (Bahçelievler Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 324,
            "AreaName": null,
            "DisplayName": "Altın Koza, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 325,
            "AreaName": null,
            "DisplayName": "Abee Jetgil's Fast & Food, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 326,
            "AreaName": null,
            "DisplayName": "Balıkçı Mürsel, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Balık & Deniz Ürünleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 327,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 328,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 329,
            "AreaName": null,
            "DisplayName": "Bey Döner, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 330,
            "AreaName": null,
            "DisplayName": "Sosyete Kokoreç, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 331,
            "AreaName": null,
            "DisplayName": "Şımarık Döner, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 332,
            "AreaName": null,
            "DisplayName": "Buket Lahmacun, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 333,
            "AreaName": null,
            "DisplayName": "Can Alp Kokoreç Uykuluk & Sucuk, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 334,
            "AreaName": null,
            "DisplayName": "Kervan Çorba & Döner & Kokoreç, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 335,
            "AreaName": null,
            "DisplayName": "Tavachi, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 336,
            "AreaName": null,
            "DisplayName": "Fabric Döner, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 337,
            "AreaName": null,
            "DisplayName": "Miss Pilav, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Pilav",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 338,
            "AreaName": null,
            "DisplayName": "Kral Döner, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 339,
            "AreaName": null,
            "DisplayName": "Et-çi Steak House, Çerkezköy (Kızılpınar Mah.)",
            "MainCuisineName": "Steak",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 340,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 341,
            "AreaName": null,
            "DisplayName": "Çorlu Lahmacun Dünyası, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 342,
            "AreaName": null,
            "DisplayName": "Simple Cafe & Restaurant, Malkara (Cami Atik Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 343,
            "AreaName": null,
            "DisplayName": "Gezen Tavuk Dönerleri, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 344,
            "AreaName": null,
            "DisplayName": "Beyaz Lahmacun & Pide, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 345,
            "AreaName": null,
            "DisplayName": "Öz Edirne Tava Ciğeri, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 346,
            "AreaName": null,
            "DisplayName": "Lokma King & Waffle, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Waffle",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 347,
            "AreaName": null,
            "DisplayName": "Adıyamanlı Ali Baba Çiğ Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 348,
            "AreaName": null,
            "DisplayName": "Elit Class İskender & Kebapçısı, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 349,
            "AreaName": null,
            "DisplayName": "Temel Reis Fast & Food, Çorlu (Kemalettin Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 350,
            "AreaName": null,
            "DisplayName": "Urfam Kebap & Pide & Lahmacun, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 351,
            "AreaName": null,
            "DisplayName": "Mezeci, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 352,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 353,
            "AreaName": null,
            "DisplayName": "Kürekte Lahmacun, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 354,
            "AreaName": null,
            "DisplayName": "Millside Pizza, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 355,
            "AreaName": null,
            "DisplayName": "Eklercim, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 356,
            "AreaName": null,
            "DisplayName": "Ciğerci Veysel, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 357,
            "AreaName": null,
            "DisplayName": "Konya Etli Ekmek, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 358,
            "AreaName": null,
            "DisplayName": "Palais Cafe & Restaurant, Saray (Ayaspaşa Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 359,
            "AreaName": null,
            "DisplayName": "Memoli Döner, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 360,
            "AreaName": null,
            "DisplayName": "Çatal Dürüm, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 361,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 362,
            "AreaName": null,
            "DisplayName": "Mersin 33 Yaprak Tantuni, Süleymanpaşa (Altınova Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 363,
            "AreaName": null,
            "DisplayName": "Kahta Sofrası, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 364,
            "AreaName": null,
            "DisplayName": "Safinaz Fast Food, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 365,
            "AreaName": null,
            "DisplayName": "Hismar Et Garden, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 366,
            "AreaName": null,
            "DisplayName": "Öz Diyar Izgara & Kokoreç, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 367,
            "AreaName": null,
            "DisplayName": "Mutfak Emine Teyze, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 368,
            "AreaName": null,
            "DisplayName": "Antek Cafe & Fast Food, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 369,
            "AreaName": null,
            "DisplayName": "Atom 59 XL, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 370,
            "AreaName": null,
            "DisplayName": "Şehzade Restaurant, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 371,
            "AreaName": null,
            "DisplayName": "La Dolceria Pizza & Burger, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 372,
            "AreaName": null,
            "DisplayName": "Dream City Cafe & Restaurant, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 373,
            "AreaName": null,
            "DisplayName": "Ustasos Döner, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 374,
            "AreaName": null,
            "DisplayName": "Meze'sdef, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 375,
            "AreaName": null,
            "DisplayName": "Adıyaman Çiğ Köftecisi, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 376,
            "AreaName": null,
            "DisplayName": "Mandalı Restaurant, Kapaklı (Bahçelievler Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 377,
            "AreaName": null,
            "DisplayName": "Mersin 33 Tantuni Ümit Usta, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 378,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 379,
            "AreaName": null,
            "DisplayName": "La Kuzen Waffle & Kumpir, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kumpir",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 380,
            "AreaName": null,
            "DisplayName": "Bora Çınaraltı Yemek & Fast Food, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 381,
            "AreaName": null,
            "DisplayName": "Kokorech, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 382,
            "AreaName": null,
            "DisplayName": "Gözde Kokoreç & Sucuk & Midye, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 383,
            "AreaName": null,
            "DisplayName": "Ekler Sarayı, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Pastane & Fırın",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 384,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Kapaklı (İsmet Paşa Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 385,
            "AreaName": null,
            "DisplayName": "Nil Fast Food, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 386,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Yıldırım Beyazıt Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 387,
            "AreaName": null,
            "DisplayName": "Waffle House, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Waffle",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 388,
            "AreaName": null,
            "DisplayName": "Adıyamanlı Çiğ Köfteci Erkan Usta, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 389,
            "AreaName": null,
            "DisplayName": "Tombik Döner, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 390,
            "AreaName": null,
            "DisplayName": "Adanalı Şen Kebap, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 391,
            "AreaName": null,
            "DisplayName": "Hacı Süleyman Döner, Süleymanpaşa (Ertuğrul Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 392,
            "AreaName": null,
            "DisplayName": "Millside, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 393,
            "AreaName": null,
            "DisplayName": "Hitaly, Süleymanpaşa (Namık Kemal Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 394,
            "AreaName": null,
            "DisplayName": "Atakaan Sosss Köfte & Sucuk & Kanat Çevirme, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 395,
            "AreaName": null,
            "DisplayName": "Selimiye Edirne Tava Ciğeri, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 396,
            "AreaName": null,
            "DisplayName": "Çavuşoğlu Döner & Kebap, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 397,
            "AreaName": null,
            "DisplayName": "Mersin 33 Yaprak Tantuni, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 398,
            "AreaName": null,
            "DisplayName": "Adress Waffle, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Waffle",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 399,
            "AreaName": null,
            "DisplayName": "Buluş Lahmacun & Pide, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 400,
            "AreaName": null,
            "DisplayName": "Ayhan'ın Yeri Köfte, Şarköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 401,
            "AreaName": null,
            "DisplayName": "B'chocolaterie, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 402,
            "AreaName": null,
            "DisplayName": "Tadım Döner, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 403,
            "AreaName": null,
            "DisplayName": "Memlek-et Kavurma, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 404,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 405,
            "AreaName": null,
            "DisplayName": "Fırat Kebap, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 406,
            "AreaName": null,
            "DisplayName": "Tatar Et Restaurant, Çerkezköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 407,
            "AreaName": null,
            "DisplayName": "Baston, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 408,
            "AreaName": null,
            "DisplayName": "Cafe 59 & Restaurant, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 409,
            "AreaName": null,
            "DisplayName": "Yörük Et Köfte & Uykuluk & Kokoreç, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 410,
            "AreaName": null,
            "DisplayName": "Öz İkizler Künefe & Katmer, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 411,
            "AreaName": null,
            "DisplayName": "Domino's Pizza, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Domino's Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 412,
            "AreaName": null,
            "DisplayName": "İkram Pide & Lahmacun, Çerkezköy (Fevzipaşa Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 413,
            "AreaName": null,
            "DisplayName": "Yandım Et Mangal, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 414,
            "AreaName": null,
            "DisplayName": "Dürümcü Sinan Usta, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 415,
            "AreaName": null,
            "DisplayName": "Sedir Uzunköprü Köfte & Çorba, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 416,
            "AreaName": null,
            "DisplayName": "Boss Burger & Pizza, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 417,
            "AreaName": null,
            "DisplayName": "Köfteci Usta, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 418,
            "AreaName": null,
            "DisplayName": "Bistro 59, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 419,
            "AreaName": null,
            "DisplayName": "Kahtalım Pide & Lahmacun, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 420,
            "AreaName": null,
            "DisplayName": "Asil Ustam Çiğ Köfte & Börek & Islak Hamburger, Malkara (Cami Atik Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 421,
            "AreaName": null,
            "DisplayName": "Lezzet Sarayı, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 422,
            "AreaName": null,
            "DisplayName": "Pancake And Coffee, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 423,
            "AreaName": null,
            "DisplayName": "Elite Mangal & Çorba, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 424,
            "AreaName": null,
            "DisplayName": "Mısmıl Köfte, Çorlu (Çobançeşme Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 425,
            "AreaName": null,
            "DisplayName": "Çorlu Mezze, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 426,
            "AreaName": null,
            "DisplayName": "Elit Döner, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 427,
            "AreaName": null,
            "DisplayName": "Lagash Çiğ Köfte, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 428,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Kapaklı (İsmet Paşa Mah. - Organize Sanayi Bölg.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 429,
            "AreaName": null,
            "DisplayName": "Harun Usta Tantuni, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 430,
            "AreaName": null,
            "DisplayName": "Clay Cafe, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 431,
            "AreaName": null,
            "DisplayName": "Battalbey Çiğ Köfte, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 432,
            "AreaName": null,
            "DisplayName": "Pizza Munch, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 433,
            "AreaName": null,
            "DisplayName": "Döner Adam, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 434,
            "AreaName": null,
            "DisplayName": "Bafra Pide Serdar Usta, Kapaklı (Atatürk Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 435,
            "AreaName": null,
            "DisplayName": "Adanalı 01 Kebap & Dürüm Evi, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 436,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 437,
            "AreaName": null,
            "DisplayName": "Gündoğdu Döner & Çorba, Süleymanpaşa (Ertuğrul Mah. )",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 438,
            "AreaName": null,
            "DisplayName": "Hardal’s Büfe, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 439,
            "AreaName": null,
            "DisplayName": "Bey Konağı Kebap, Süleymanpaşa (Hürriyet Mah. - Tepekent Konutları)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 440,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Fatih Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 441,
            "AreaName": null,
            "DisplayName": "Urfa Dilek Kebap & Lahmacun, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 442,
            "AreaName": null,
            "DisplayName": "Közde Kebap, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 443,
            "AreaName": null,
            "DisplayName": "Çorlu Kebap Evi, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 444,
            "AreaName": null,
            "DisplayName": "Pidebank, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 445,
            "AreaName": null,
            "DisplayName": "Özsüt, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Özsüt",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 446,
            "AreaName": null,
            "DisplayName": "Biggy Burger, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 447,
            "AreaName": null,
            "DisplayName": "Kubatoğlu Lahmacun & Pide & Pizza, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 448,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Fevzipaşa Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 449,
            "AreaName": null,
            "DisplayName": "Köşem Ev Yemekleri, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 450,
            "AreaName": null,
            "DisplayName": "Çatal Dürüm, Kapaklı (İnönü Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 451,
            "AreaName": null,
            "DisplayName": "Tavada Tavuk, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 452,
            "AreaName": null,
            "DisplayName": "Ciğerci Muzo, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 453,
            "AreaName": null,
            "DisplayName": "Faruk Pizza, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 454,
            "AreaName": null,
            "DisplayName": "Akdağ Pide, Çorlu (Cemaliye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 455,
            "AreaName": null,
            "DisplayName": "Son Durak Büfe, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 456,
            "AreaName": null,
            "DisplayName": "Etoba Express Burger & Köfte, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 457,
            "AreaName": null,
            "DisplayName": "April Cafe Güveç & Pide & Börek, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 458,
            "AreaName": null,
            "DisplayName": "Desperado Cafe & Bistro, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 459,
            "AreaName": null,
            "DisplayName": "Faruk Pizza, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 460,
            "AreaName": null,
            "DisplayName": "BarBurger, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 461,
            "AreaName": null,
            "DisplayName": "Köprübaşı Kebap, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 462,
            "AreaName": null,
            "DisplayName": "Antepli Kebapçı Müslüm Baba, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 463,
            "AreaName": null,
            "DisplayName": "Hasan Amca Kokoreç, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 464,
            "AreaName": null,
            "DisplayName": "Gaziantepli Hamido Baklava, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 465,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 466,
            "AreaName": null,
            "DisplayName": "Texas Büfe, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 467,
            "AreaName": null,
            "DisplayName": "Prestij Pizza & Burger, Süleymanpaşa (Hürriyet Mah. - Baykallar Mevkii)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 468,
            "AreaName": null,
            "DisplayName": "Dip Cafe, Malkara (Cami Atik Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 469,
            "AreaName": null,
            "DisplayName": "Tayyar Baba, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 470,
            "AreaName": null,
            "DisplayName": "Marty's, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 471,
            "AreaName": null,
            "DisplayName": "Tayyar Baba, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 472,
            "AreaName": null,
            "DisplayName": "Murat Usta Tantuni, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 473,
            "AreaName": null,
            "DisplayName": "Vip Taş Fırın, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 474,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Çerkezköy (Gazi M. K.paşa Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 475,
            "AreaName": null,
            "DisplayName": "Çiğ Köfte Evi, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 476,
            "AreaName": null,
            "DisplayName": "Bol Bol Çiğ Köfte, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 477,
            "AreaName": null,
            "DisplayName": "Mersin 33 Yaprak Tantuni, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Tantuni",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 478,
            "AreaName": null,
            "DisplayName": "Sema Büfe, Süleymanpaşa (100. Yıl Mah. - Alt Yol)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 479,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Çerkezköy (Cumhuriyet Mah. - Tepe Emlak Konutları)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 480,
            "AreaName": null,
            "DisplayName": "Sanat Kebap Adana İşi Dürüm, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 481,
            "AreaName": null,
            "DisplayName": "Köprübaşı Lahmacun & Pide, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 482,
            "AreaName": null,
            "DisplayName": "Göbeklitepe Kebap & Pide, Süleymanpaşa (Hürriyet Mah. - Baykallar Mevkii)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 483,
            "AreaName": null,
            "DisplayName": "Eatford Pizzeria, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 484,
            "AreaName": null,
            "DisplayName": "Altın Bıçak Mangalda Et Döner, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 485,
            "AreaName": null,
            "DisplayName": "Pizza Munch, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 486,
            "AreaName": null,
            "DisplayName": "Star Tost, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 487,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 488,
            "AreaName": null,
            "DisplayName": "Barbecue Steak House, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Steak",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 489,
            "AreaName": null,
            "DisplayName": "Öz Baba Döner, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 490,
            "AreaName": null,
            "DisplayName": "Gazi Usta Tavuk, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tavuk",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 491,
            "AreaName": null,
            "DisplayName": "Birtat Köfte 1965, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 492,
            "AreaName": null,
            "DisplayName": "Şehr-i Sanat Baklavacısı, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 493,
            "AreaName": null,
            "DisplayName": "Gerçek Burger, Çerkezköy (Gazi Osman Paşa Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 494,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çerkezköy (İstasyon Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 495,
            "AreaName": null,
            "DisplayName": "My Lahmacun, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 496,
            "AreaName": null,
            "DisplayName": "A+ Gevrek Lahmacun Pizza & Pide, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 497,
            "AreaName": null,
            "DisplayName": "Çelebi Dağıtım, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 498,
            "AreaName": null,
            "DisplayName": "Kahta Çiğ Köfte Bilal Usta, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 499,
            "AreaName": null,
            "DisplayName": "İzol Börek, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Kahvaltı & Börek",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 500,
            "AreaName": null,
            "DisplayName": "Büfeterya, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 501,
            "AreaName": null,
            "DisplayName": "Batu Köfte & Döner, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 502,
            "AreaName": null,
            "DisplayName": "Şimarix Döner, Ergene (Sağlık Mah.)",
            "MainCuisineName": "Döner",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 503,
            "AreaName": null,
            "DisplayName": "BakloveA, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 504,
            "AreaName": null,
            "DisplayName": "Öz Çıtır Lahmacun, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 505,
            "AreaName": null,
            "DisplayName": "Köfteci Recep, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 506,
            "AreaName": null,
            "DisplayName": "Kervansaray Et Mangal, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Steak",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 507,
            "AreaName": null,
            "DisplayName": "Baysal Kokoreç, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 508,
            "AreaName": null,
            "DisplayName": "Velimeşe Bozacısı Önder, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 509,
            "AreaName": null,
            "DisplayName": "Balaban Tekirdağ, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 510,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 511,
            "AreaName": null,
            "DisplayName": "Meşhur Adıyaman Çiğ Köftecisi Ömer Aybak, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 512,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 513,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğköfte, Çerkezköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 514,
            "AreaName": null,
            "DisplayName": "Yemek Dünyası, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 515,
            "AreaName": null,
            "DisplayName": "Şehr-i Sanat Baklavacısı, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 516,
            "AreaName": null,
            "DisplayName": "Akdeniz Mantı & Yufka, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Mantı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 517,
            "AreaName": null,
            "DisplayName": "Sırma Su, Çorlu (Çobançeşme Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 518,
            "AreaName": null,
            "DisplayName": "Adıyaman Çiğ Köfteci Erkan Usta, Süleymanpaşa (Yavuz Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 519,
            "AreaName": null,
            "DisplayName": "The Pablo, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 520,
            "AreaName": null,
            "DisplayName": "Hatay Çıtır Künefe, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 521,
            "AreaName": null,
            "DisplayName": "Dadaşlar Restaurant, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Pastane & Fırın",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 522,
            "AreaName": null,
            "DisplayName": "Cesa Çiğ Köfte, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 523,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 524,
            "AreaName": null,
            "DisplayName": "Port Cafe, Şarköy (Cumhuriyet Mah.)",
            "MainCuisineName": "Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 525,
            "AreaName": null,
            "DisplayName": "Cemşit Sıra Dışı Lezzetler, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 526,
            "AreaName": null,
            "DisplayName": "Arı Fırın, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Pastane & Fırın",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 527,
            "AreaName": null,
            "DisplayName": "MR. Burger, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 528,
            "AreaName": null,
            "DisplayName": "Memoli Lahmacun & Pide, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 529,
            "AreaName": null,
            "DisplayName": "Big Coffee House, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 530,
            "AreaName": null,
            "DisplayName": "Canan Usta Bafra Pide, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 531,
            "AreaName": null,
            "DisplayName": "Buzdağı Su, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 532,
            "AreaName": null,
            "DisplayName": "Kumrucu Cemil, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 533,
            "AreaName": null,
            "DisplayName": "Çiğ Köfteci Bekir Usta, Süleymanpaşa (Gündoğdu Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 534,
            "AreaName": null,
            "DisplayName": "Nafiş Gözleme & Mantı Evi, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Mantı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 535,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Kapaklı (Cumhuriyet Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 536,
            "AreaName": null,
            "DisplayName": "Buzdağı Su, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 537,
            "AreaName": null,
            "DisplayName": "Komagene Etsiz Çiğ Köfte, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Komagene Etsiz Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 538,
            "AreaName": null,
            "DisplayName": "Tatlıses Çiğ Köfte, Şarköy (İstiklal Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 539,
            "AreaName": null,
            "DisplayName": "Destan Pide Lahmacun & Izgara, Çorlu (Hürriyet Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 540,
            "AreaName": null,
            "DisplayName": "Kuzey Kokoreç & Sucuk & Köfte, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Kokoreç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 541,
            "AreaName": null,
            "DisplayName": "Obur-X, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 542,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 543,
            "AreaName": null,
            "DisplayName": "Casper Fast Food & Çiğ Köfte, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 544,
            "AreaName": null,
            "DisplayName": "Konak Lounge, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 545,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 546,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Süleymanpaşa (100. Yıl Mah. - Alt Yol)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 547,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 548,
            "AreaName": null,
            "DisplayName": "Armada Restaurant, Çorlu (Zafer Mah.)",
            "MainCuisineName": "Kebap & Türk Mutfağı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 549,
            "AreaName": null,
            "DisplayName": "Maya Restaurant, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 550,
            "AreaName": null,
            "DisplayName": "Kutludoğmuş, Çorlu (Çobançeşme Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 551,
            "AreaName": null,
            "DisplayName": "Myra Çikolata Evim Chocolate & Cafe, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Tatlı",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 552,
            "AreaName": null,
            "DisplayName": "Öğrenci İşleri Mantı & Gözleme Cafe, Süleymanpaşa (Hürriyet Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 553,
            "AreaName": null,
            "DisplayName": "Biq Burger, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 554,
            "AreaName": null,
            "DisplayName": "Meşhur Adıyaman Çiğ Köftecisi Ömer Aybak, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 555,
            "AreaName": null,
            "DisplayName": "Chocolate Station, Çorlu (Esentepe Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 556,
            "AreaName": null,
            "DisplayName": "Hamidiye Su, Çorlu (Nusratiye Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 557,
            "AreaName": null,
            "DisplayName": "1991 Tarihi Ortaköy Kumpircisi, Çorlu (Alipaşa Mah.)",
            "MainCuisineName": "Kumpir",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 558,
            "AreaName": null,
            "DisplayName": "Oses Çiğ Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 559,
            "AreaName": null,
            "DisplayName": "Mutlu Çorba & Köfte, Süleymanpaşa (100. Yıl Mah. - Üst Yol)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 560,
            "AreaName": null,
            "DisplayName": "Aleda Cafe, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": true
        },
        {
            "id": 561,
            "AreaName": null,
            "DisplayName": "Köfteci Yalçın, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 562,
            "AreaName": null,
            "DisplayName": "Erdoğan Mantı & Çiğ Börek, Süleymanpaşa (Değirmenaltı Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 563,
            "AreaName": null,
            "DisplayName": "Joker Burger & Sandwich, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 564,
            "AreaName": null,
            "DisplayName": "Little Caesars Pizza, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Little Caesars Pizza",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 565,
            "AreaName": null,
            "DisplayName": "The Chef Burger, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Burger",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 566,
            "AreaName": null,
            "DisplayName": "Gözde Lokanta, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 567,
            "AreaName": null,
            "DisplayName": "Zeyrek Restaurant, Çorlu (Şeyh Sinan Mah.)",
            "MainCuisineName": "Ev Yemekleri",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 568,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Çorlu (Reşadiye Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 569,
            "AreaName": null,
            "DisplayName": "Durak Fast Food, Süleymanpaşa (Çınarlı Mah.)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 570,
            "AreaName": null,
            "DisplayName": "Arsamiea Çiğ Köfte, Kapaklı (Bahçelievler Mah.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 571,
            "AreaName": null,
            "DisplayName": "Pilav'es, Süleymanpaşa (Eski Cami Mah.)",
            "MainCuisineName": "Pilav",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 572,
            "AreaName": null,
            "DisplayName": "The Fabrik, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": true,
            "IsNew": false
        },
        {
            "id": 573,
            "AreaName": null,
            "DisplayName": "Sofram, Süleymanpaşa (Aydoğdu Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 574,
            "AreaName": null,
            "DisplayName": "Tekinbeyler Yemek, Süleymanpaşa (100. Yıl Mah. - Sanayi Sitesi)",
            "MainCuisineName": "Tost & Sandviç",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 575,
            "AreaName": null,
            "DisplayName": "Fuska Su, Çorlu (Nusratiye Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 576,
            "AreaName": null,
            "DisplayName": "Deniz Pide & Pizza, Marmara Ereğlisi (Yeni Çiftlik Mah.)",
            "MainCuisineName": "Pide & Lahmacun",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 577,
            "AreaName": null,
            "DisplayName": "Eşme Su, Çerkezköy (Gazi M. K.Paşa Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 578,
            "AreaName": null,
            "DisplayName": "Ziyafet Çiğ Köfte, Kapaklı (Cumhuriyet Mah. - Zengin Cad.)",
            "MainCuisineName": "Çiğ Köfte",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        },
        {
            "id": 579,
            "AreaName": null,
            "DisplayName": "Aşk Sherbet-i Cafe & Restaurant, Çorlu (Kazımiye Mah.)",
            "MainCuisineName": "Dünya Mutfağı & Cafe",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": false
        },
        {
            "id": 580,
            "AreaName": null,
            "DisplayName": "Eşme Doruk Su, Çorlu (Muhittin Mah.)",
            "MainCuisineName": "Damacana Su",
            "CatalogName": "TR_TEKIRDAG",
            "IsOpen": false,
            "IsNew": true
        }
    ]

# official api output

    /*  

        [CategoryName] => d5f57489-253e-4a9e-afd6-2b884cd7a7af
        [AreaName] => Çorlu (Alipaşa Mah.)
        [DisplayName] => Pera Villa, Çorlu (Kemalettin Mah.)
        [MainCuisineName] => Dünya Mutfağı & Cafe
        [MinimumDeliveryPriceText] => 35,00
        [SeoUrl] => /pera-villa-corlu-kemalettin-mah-tekirdag
        [this->restaurantstatus] => 0
        [IsNew] => 
        [IsOpen] => 
        [IsFreezoneRestaurant] => 
        [IsAdRestaurant] => 
        [HasCampusDiscount] => 
        [Avgthis->restaurantscore] => 7,4
        [IsYSDeliveryRestaurant] => 
        [ImageLabelListFullPath] => Array
            (
                [0] => https://cdn.yemeksepeti.com/Labels/Promotion/eski_indirim_yuzde_25.png?v=1
            )

        [SuperDelivery] => 
        [Recommendation] => 
        [AllPromotionImageListFullPath] => Array
            (
                [0] => https://cdn.yemeksepeti.com/Labels/Promotion/indirim_yuzde_25.png?v=1
            )

        [WorkHoursText] => 08:00-23:00
        [DeliveryTime] => 60
        [ImagePath] => https://cdn.yemeksepeti.com/CategoryImages/TR_TEKIRDAG/pera_villa_big.gif
        [SpeedText] => 7,5
        [FlavourText] => 7,2
        [ServingText] => 7,5
        [DeliveryTimeText] => 50 - 60 dk.
        [ImageFullPathSmall] => https://cdn.yemeksepeti.com/CategoryImages/TR_TEKIRDAG/pera_villa_small.gif
        [IsDiscountedDeliveryFee] => 
        [DeliveryFeeText] => 0,00
        [DiscountedDeliveryFeeText] => 0,00
        [Avgthis->restaurantscorePoint] => 7.4
        [SpecialCategoryImageListFullPath] => Array
            (
            )

        [ImageShortPath] => /CategoryImages/TR_TEKIRDAG/pera_villa.gif
        [ImageShortPathSmall] => /CategoryImages/TR_TEKIRDAG/pera_villa_small.gif
        [CuisineNameList] => Array
            (
                [0] => Dünya Mutfağı & Cafe
            )

        [CuisineImageList] => Array
            (
                [0] => dunya-mutfagi.jpg
            )

        [CatalogName] => TR_TEKIRDAG
        [IsPickUpRestaurant] = 
        
    */
