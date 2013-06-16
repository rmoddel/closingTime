<?php

// Note: DELETE ' 'food'; //' to exit test mode
$category = $_POST['category'];

$place = ($_POST['zip']);

$key = 'AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

$url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=' . $category . '+' . urlencode($place) . '&sensor=false&key=' . $key;

// Working URL:
//'https://maps.googleapis.com/maps/api/place/textsearch/json?query=gas_station+lakewood+NJ&sensor=true&key=AIzaSyD8sA6gMVZxIuKMOLvUPqa6pvlW_vF1PPo';

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
