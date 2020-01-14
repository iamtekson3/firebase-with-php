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
      $ref = 'paragliding-monitoring-system/Paraglider\ Location';
      $data = $database->getReference($ref)->getValue();
      $i = 0;
      echo('<h1>who r u</h1>');
      foreach($data as $key -> $data1) {
        echo('<h1>$data1["altitude"]</h1>');
        $i++;
      };
    ?>

  </body>
</html>


