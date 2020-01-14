# Documentation

This documentation will provide the methodology to connect your firebase database with php.

1. First you need composer. `sudo apt install composer`
2. Initialize the composer and add some values so that `composer.json` file will created. `composer init`
3. Install the composer. It will create vendor folder in your project directory, which includes composer files. `composer install`
4. Generate the service key account `private-key.json` file using your database setting and save it inside project directory.
5. install `mbstring` file. `sudo apt install php7.2-mbstring`
6. install `kreait/firebase-php` using command `composer require kreait/firebase-php ^4.35`
7. Create `db.php` file which will help to connect the database. Inside `db.php` include following code with suitable `private-key.json` file location and suitable `url`.

```php
<?php
require './vendor/autoload.php';

use Kreait\Firebase\Factory;

// echo "Path = " .  __DIR__.'/private/paragliding-monitoring-system-firebase-adminsdk-qbrdr-31ef161f00.json';
$factory = (new Factory)
    ->withServiceAccount('suitable/location/for/file/private-key.json')
    ->withDatabaseUri('URL of the project')
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
```
