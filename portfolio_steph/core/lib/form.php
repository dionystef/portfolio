<?php
function imput($id){
  $value= isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control' type='text' name=$id value=$value>";
}
echo "form ok </br>";
?>
