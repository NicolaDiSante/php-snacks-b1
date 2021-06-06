<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack1</title>
</head>
<body>

<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$partite = [
  [
  "team1" => "Olimpia Milano",
  "score1" => 95,
  "team2" => "Razzi Lanciano",
  "score2" => 87
  ],
  [
  "team1" => "Inter Milano",
  "score1" => 35,
  "team2" => "Fortitudo",
  "score2" => 995
  ],
]

?>



<?php foreach($partite as $partita) { ?>

  <h1>
  <?php echo $partita[team1] ?> - <?php echo $partita[team2] ?> | <?php echo $partita[score1]?>-<?php echo $partita[score2] ?>
  </h1>




<?php }?> 


  
</body>
</html>