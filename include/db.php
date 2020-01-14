<?php
require './vendor/autoload.php';

use Kreait\Firebase\Factory;

// echo "Path = " .  __DIR__.'/private/paragliding-monitoring-system-firebase-adminsdk-qbrdr-31ef161f00.json';
$factory = (new Factory)
    ->withServiceAccount('./private/private-key.json')
    ->withDatabaseUri('https://paragliding-monitoring-system.firebaseio.com/')
    ->create();

$database = $factory->getDatabase();
?>


<!-- // print_r(die($data));
// foreach($data as $d) {
//     echo $i;
//     echo $d;
//     $i++;
// } -->
