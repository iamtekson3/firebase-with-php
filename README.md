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

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
<?php
$factory = (new Factory)
    ->withServiceAccount('/path/to/google-service-account.json')
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://paragliding-monitoring-system.firebaseio.com/');

$database = $factory->createDatabase();

$newPost = $database
    ->getReference('blog/posts')
    ->push([
        'title' => 'Post title',
        'body' => 'This should probably be longer.'
    ]);

$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

$newPost->getChild('title')->set('Changed post title');
$newPost->getValue(); // Fetches the data from the realtime database
$newPost->remove();

?>
```
