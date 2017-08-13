<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'base':
        $controller = new BaseController();
        break;
    }
    
   
    $controller->{ $action }();            
  }

  // array for controllers and actions which are allowed
  $controllers = array( 'base' => ['error','index']);

  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('base', 'error');
    }
  } else {
     call('base', 'error');
  }
?>