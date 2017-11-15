<?php
try {
  // connexion a la bdd
  $db_connect = new PDO('mysql:host=localhost;dbname=portfolio_steph','root','root');
  // formatage du fetch
  $db_connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch (Exception $e){
  echo 'erreur de connexion :</br>';
  echo $e->getMessage();;
  die();
}

echo "db connect ok </br>";
