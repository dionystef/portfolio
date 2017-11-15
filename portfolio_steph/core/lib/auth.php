<?php
session_start();
if (!isset($auth)) {
  if (!isset($_SESSION['auth']['id'])) {
    header('Location:' . WEBROOT . 'pages/login.php');
    die();
  }
  echo "session ok </br>";
}?>
