<?php

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    // if controller and action is not set then display error page
    $controller = 'base';
    $action     = 'index';
  }

  require_once('views/layout.php');
  
?>
