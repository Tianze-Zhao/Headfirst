<?php
  session_start();
  if(isset($_SESSION['username'])){
    $_SESSION = array();
  }

  if (isset($_COOKIE[session_name()])){
    setcookie($_COOKIE[session_name()], '', time()-3600);
  }

  session_destroy();

  //Redirect to the home page
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location:' . $home_url);
 ?>
