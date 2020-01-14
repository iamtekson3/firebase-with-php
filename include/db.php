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
// print_r(die($data));
foreach($data as $d) {
    echo $i;
    echo $d;
    echo $d['latitude'];
    $i++;

}

// $newPost = $database
//     ->getReference('blog/posts')
//     ->push([
//         'title' => 'Post title',
//         'body' => 'This should probably be longer.'
//     ]);

// $newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
// $newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

// $newPost->getChild('title')->set('Changed post title');
// $newPost->getValue(); // Fetches the data from the realtime database
// $newPost->remove();

?>