<?php

// Note: DELETE ' 'food'; //' to exit test mode
$category = $_POST['category'];

$place = ($_POST['zip']);

$key = 'AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

$url = 'https://maps.googleapis.com/maps/api/place/details/json?reference=CoQBcwAAAO6HiXt2id0zVgpwZgZK1xLaq0CCtTEY1rYXn6c1QoFxRie-DwbGZzuqAan4XUxUnf6wnd-xKNV7T1mv8zsozkGaY5rnt_cTD1GsakPlcmWhWtLGLVh8HjgdJNcR0nFPin2ZzY7MaQ60csO-i5gCKuhTzyRGa22itvfutG9grXePEhABMVIKT13xRCmkz5SSlsWjGhTUzvGPq8PjowSN387HPluJrWeKCg&sensor=true&key=AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

$curl_object = curl_init($url);
curl_setopt($curl_object, CURLOPT_URL, $url);
curl_setopt($curl_object, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_object, CURLOPT_HEADER, 0);
curl_setopt($curl_object, CURLOPT_SSL_VERIFYPEER, FALSE);
$test = curl_exec($curl_object);

if ($test === FALSE) {
   die(curl_error($curl_object));
}

curl_close($curl_object);
//var_dump($test);

$list = json_decode($test, TRUE);
//$business_name = $list['results'][0]['name'];
   
echo "<br />".$business_name;

$store_name = array();

$i = 0;
foreach($list as $valu){
if (is_array($valu))
{
   foreach ($valu as $value){

         $store_name[$i]['name'] = $value['name'];
         $store_name[$i]['address'] = $value['formatted_address'];
         $store_name[$i]['reference'] = $value['reference'];
         $store_name[$i]['address_components'] = $value['address_components']; 
         $store_name[$i]['icon'] = $value['icon'];

         $store_name[$i]['open'] = $value['opening_hours']; 
         //$store_name[$i]['periods'] = $value['opening_hours']['periods'];
         //$store_name[$i]['close_day'] = $value['opening_hours']['periods']['close']['day'];
         //$store_name[$i]['close_time'] = $value['opening_hours']['periods']['close'];
         $i++;
               }

       }
} 

/*{
   "debug_info" : [],
   "html_attributions" : [],
   "result" : {
      "address_components" : [
         {
            "long_name" : "1700",
            "short_name" : "1700",
            "types" : [ "street_number" ]
         },
         {
            "long_name" : "Madison Avenue",
            "short_name" : "Madison Avenue",
            "types" : [ "route" ]
         },
         {
            "long_name" : "Lakewood Township",
            "short_name" : "Lakewood Township",
            "types" : [ "locality", "political" ]
         },
         {
            "long_name" : "Ocean",
            "short_name" : "Ocean",
            "types" : [ "administrative_area_level_2", "political" ]
         },
         {
            "long_name" : "NJ",
            "short_name" : "NJ",
            "types" : [ "administrative_area_level_1", "political" ]
         },
         {
            "long_name" : "US",
            "short_name" : "US",
            "types" : [ "country", "political" ]
         },
         {
            "long_name" : "08701",
            "short_name" : "08701",
            "types" : [ "postal_code" ]
         }
      ],
      "formatted_address" : "1700 Madison Avenue, Lakewood Township, NJ, United States",
      "formatted_phone_number" : "(732) 901-4019",
      "geometry" : {
         "location" : {
            "lat" : 40.1088110,
            "lng" : -74.2194030
         }
      },
      "icon" : "http://maps.gstatic.com/mapfiles/place_api/icons/shopping-71.png",
      "id" : "1933368de5c7dd97dc76fef6c31d732e52f8e441",
      "international_phone_number" : "+1 732-901-4019",
      "name" : "The Children's Place",
      "opening_hours" : {
         "open_now" : true,
         "periods" : [
            {
               "close" : {
                  "day" : 0,
                  "time" : "1900"
               },
               "open" : {
                  "day" : 0,
                  "time" : "1100"
               }
            },
            {
               "close" : {
                  "day" : 1,
                  "time" : "2100"
               },
               "open" : {
                  "day" : 1,
                  "time" : "1000"
               }
            },
            {
               "close" : {
                  "day" : 2,
                  "time" : "2100"
               },
               "open" : {
                  "day" : 2,
                  "time" : "1000"
               }
            },
            {
               "close" : {
                  "day" : 3,
                  "time" : "2100"
               },
               "open" : {
                  "day" : 3,
                  "time" : "1000"
               }
            },
            {
               "close" : {
                  "day" : 4,
                  "time" : "2100"
               },
               "open" : {
                  "day" : 4,
                  "time" : "1000"
               }
            },
            {
               "close" : {
                  "day" : 5,
                  "time" : "2100"
               },
               "open" : {
                  "day" : 5,
                  "time" : "1000"
               }
            },
            {
               "close" : {
                  "day" : 6,
                  "time" : "1900"
               },
               "open" : {
                  "day" : 6,
                  "time" : "1000"
               }
            }
         ]
      },
      "price_level" : 2,
      "reference" : "CoQBcwAAABzGkB_f-Jeel2hEfVurBpfWUpyQ39JwivDbPBL2sZA6xrn0_a8kok1rxXPXmLrSx8bOmQ0QGKPo3UbSKno-Kjf3EPrkyVIZ3jov2kBp8qVn4lE3vOasE55NjNdIcMlf_QhrnK-g4VVcxhY4XxeBaNyxuIMzUVKexVy6okdjX-zSEhBSm2fr1JluEIwj8Q38o8krGhT7D6NjkxuaJeIhQfAVbYRrSRBWow",
      "reviews" : [
         {
            "aspects" : [
               {
                  "rating" : 0,
                  "type" : "overall"
               }
            ],
            "author_name" : "A Google User",
            "text" : "Angela Milia the manager from Howell NJ is antisemetic and racist. She now works at Sears Freehold Mall. Go see her there. She hates Jews.",
            "time" : 1327010992
         }
      ],
      "types" : [ "clothing_store", "store", "establishment" ],
      "url" : "https://plus.google.com/112255066442701522976/about?hl=en-US",
      "utc_offset" : -240,
      "vicinity" : "1700 Madison Avenue, Lakewood Township",
      "website" : "http://www.childrensplace.com/"
   },
   "status" : "OK"
}*/
print_r($store_name);

?>
