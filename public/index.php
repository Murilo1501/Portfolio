<?php

use App\Model\Crud;

require_once '../app/Controller/ProjectsListController.php';
require_once '../app/Controller/ProjectsFormController.php';
require_once '../app/Controller/insertProjectController.php';
require_once '../app/Model/Crud.php';

$Crud  = new Crud();

$routes = require_once __DIR__.'/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$method  = $_SERVER['REQUEST_METHOD'];

$key = "$method|$pathInfo";

if(array_key_exists($key,$routes)){
  $controllerClass = $routes["$method|$pathInfo"];
  $controller = new $controllerClass($Crud);
  $controller->CallCrud();
} else{
  http_response_code(404);
}



