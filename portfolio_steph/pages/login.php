<?php
$auth=0;
include("../core/lib/includes.php");

/**
* Traitement du formulaire
* il faut le mettre avant le header pour que le location soit pris en compte
*/
if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $db_connect->quote($_POST['username']); // sert a enlever les quotes
  $password = sha1($_POST['password']);
  $sql ="SELECT * FROM user WHERE username=$username AND password='$password'";
  $select = $db_connect->query($sql);

  if($select->rowCount() > 0)
    $_SESSION['auth'] = $select->fetch();
    header('Location:' . WEBROOT . 'admin/index.php');
    setFlash('vous êtes connecté marro');
    die();
};


/*
* include du header apres le location
*/

include("includes/header.php");
?>

<?php

?>

<form action="#" method="post">
  <div class="form-group test">
    <label for="username">Nom d'utilisateur</label>
    <?= imput('username'); ?>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input class="form-control" type="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php include("../core/lib/debug.php");?>
<?php include("includes/footer.php");?>
