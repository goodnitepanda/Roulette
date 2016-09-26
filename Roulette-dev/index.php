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

	if ($action == 'getRestaurant' or $action == 'getPlaceDetails') {
    require_once('routes.php');
	}
	else{
    require_once ('views/layout.php');
	}
?>
