<?php

require_once 'Controllers/error.php';


  class Web{

    function __construct(){

      $url = $_GET['url'];


      $routes = [
        'inicio' => ['controller' => 'HomeController', 'method' => 'index'],
        
    ];


    if (array_key_exists($url, $routes)) {
      $controllerName = $routes[$url]['controller'];
      $methodName = $routes[$url]['method'];
  
      // Incluir el archivo del controlador
      require_once 'Controllers/' . $controllerName . '.php';
  
      // Crear una instancia del controlador y llamar al método correspondiente
      $controller = new $controllerName();
      $controller->{$methodName}();
  } else {
    $error = new ErrorRoute(); 
  }


    }
  }



?>