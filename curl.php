<?php

// Note: DELETE ' 'food'; //' to exit test mode
$category = $_POST['category'];

$place = ($_POST['zip']);

$key = 'AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

$url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=gas_station+lakewood+NJ&sensor=true&key=AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

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

$store_name[] = $value['name'];
//print $value['name'];

                     }

            }
}

print_r($store_name);

?>
