<?php

include 'class.geodata.inc.php';

$lookup = new EyeGeoData();



// DELETE '('08701');    //' to exit test mode
$array  = $lookup->query('08701');    //($_POST['zip']);


$latitude = "{$array['Coordinates']['Latitude']}";

$longitude = "{$array['Coordinates']['Longitude']}";


// DELETE' 'food'; //' to exit test mode
$category = 'food'; //$_POST['category'];


$key = 'AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

$url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=' . $latitude . ',' . $longitude . '&radius=500&types=' . $category . '&sensor=false&key=' . $key;

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

echo $test;

?>
