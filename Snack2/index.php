<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>
<body>


<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$data = $_GET;

if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
  echo "errore";
}elseif(strlen($data['name']) <2 ){
  echo "errore, nome non valido";
}elseif(strpos($data['mail'], "@") === false || strpos($data['mail'], ".") === false ){
  echo "errore nella mail";
}elseif(!is_numeric($data['age'])){
  echo "errore nell'età";
}else{
  echo "indirizzo valido";
}

?>
  
</body>
</html>