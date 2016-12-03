<!DOCTYPE html>
<?php
  require ('phpFunctions/validateSession.php');
  echo "Helllo ".$_SESSION['user']->fullName;
    //print_r($_SESSION);
  // echo $_SERVER['PHP_SELF'];
?>

