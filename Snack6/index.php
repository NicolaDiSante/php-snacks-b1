<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack6</title>
</head>
<body>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div>
  <ul>
    <?php foreach($db["teachers"] as $value) {?>
      <li><?php echo $value["name"] ?> <?php echo $value["lastname"] ?></li>
    <?php }?>
  </ul>
</div>

<div>
  <ul>
    <?php foreach($db["pm"] as $value) {?>
      <li><?php echo $value["name"] ?> <?php echo $value["lastname"] ?></li>
    <?php }?>
  </ul>
</div>



</body>
</html>

