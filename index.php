<?php
$data = file_get_contents('https://www.codeschool.com/users/SHoar.json')
$json_data = $json_decode($data)
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $json_data['user']['username']; ?></title>
  </head>
  <body>

  </body>
</html>
