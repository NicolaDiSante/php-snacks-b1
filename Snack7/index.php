<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack7</title>
</head>
<body>

<?php
 
    $students = [
        [ 
          'name' => 'Nic',
          'surname' => 'Disa',
          'votes' => [5,5,4,6,7],
        ],
        [ 
          'name' => 'Rose',
          'surname' => 'Nama',
          'votes' => [9,9,7],
        ],
        [ 
          'name' => 'Wendy',
          'surname' => 'Airon',
          'votes' => [8,3,7],
        ],
    ];
 
?>

<div>
  <ul>
    <?php foreach($students as $value) {?>
      <li>
        <?php echo $value["name"] ?> <?php echo $value["surname"] ?>
        <?php echo number_format(array_sum($value['votes']) / count($value['votes']), 2, ',', '.') ?>
      </li>
    <?php }?>
  </ul>
</div>
  
</body>
</html>