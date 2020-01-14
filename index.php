<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Firebase with php</title>
  </head>
  <body>
    <?php
    echo 'what';
      include('./include/db.php');
      $ref = 'Paraglider Location';
      $i=0;
      $data = $database->getReference($ref)->getValue();
      print_r($data);
      $lat = $data['latitude'];
      $lng = $data['longitude'];
      $alt = $data['altitude'];
      echo "<h1>Latitude = ".$lat."</h1><h1>Longitude = ".$lng."</h1><h1>Altitude = ".$alt."</h1>";
    ?>

  </body>
</html>


