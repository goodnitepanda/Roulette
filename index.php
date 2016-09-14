<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } 
  else {
    $controller = 'pages';
    $action     = 'home';
  }

	if ($action != 'getRestaurant'){
		require_once('views/layout.php');
	}
	else{
		require_once ('routes.php');
	}
?>
