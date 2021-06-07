<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack4</title>
</head>
<body>

<?php


$numRnd = [];
    
    while (count($numRnd) < 15) {
      $num = rand(1, 100);
      if (!in_array($num, $numRnd)) {
        array_push($numRnd, $num);
      }
    }
  
    var_dump($numRnd);


?>
  
</body>
</html>