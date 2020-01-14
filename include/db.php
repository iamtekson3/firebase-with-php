<?php
require '../vendor/autoload.php';

use Kreait\Firebase\Factory;

// echo "Path = " .  __DIR__.'/private/paragliding-monitoring-system-firebase-adminsdk-qbrdr-31ef161f00.json';
$factory = (new Factory)
    ->withServiceAccount('../private/private-key.json')
    ->withDatabaseUri('https://paragliding-monitoring-system.firebaseio.com/')
    ->create();

$database = $factory->getDatabase();

$ref = 'Paraglider Location';
$i=0;
$data = $database->getReference($ref)->getValue();
print_r($data);
$lat = $data['latitude'];
$lng = $data['longitude'];
$alt = $data['altitude'];
echo "<h1>Latitude = ".$lat."</h1><h1>Longitude = ".$lng."</h1><h1>Altitude = ".$alt."</h1>";
?>


<!-- // print_r(die($data));
// foreach($data as $d) {
//     echo $i;
//     echo $d;
//     $i++;
// } -->
