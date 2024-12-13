<?php
  define('CONTROL', true);

  require_once('inc/api.php');

  $routes = require_once('inc/routes.php');
  $route = $_GET['route'] ?? 'home';

  if (!in_array($route, $routes)):
    $route = '404';
  endif;

  switch ($route):
    case 'home':
      require_once('inc/header.php');
      require_once('script/home.php');
      require_once('inc/footer.php');
      break;
    case 'country':
      require_once('inc/header.php');
      require_once('script/country.php');
      require_once('inc/footer.php');
      break;
    case '404':
      require_once('inc/header.php');
      require_once('script/404.php');
      require_once('inc/footer.php');
      break;
  endswitch;