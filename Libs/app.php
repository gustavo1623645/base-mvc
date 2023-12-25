<?php

require_once 'Controllers/errors.php';

class App {

    function __construct() {

        $url = isset( $_GET[ 'url' ] ) ? $_GET[ 'url' ] : null;

        if ( empty( $url[ 0 ] ) ) {
            $controllerUrlFile = 'Controllers/main.php';
            require_once $controllerUrlFile;
            $controller = new Main();
            $controller = loadModel('main');
            return false;
        }

        $url = rtrim( $url, '/' );
        $url = explode( '/', $url );

        $controllerUrlFile = 'Controllers/'. $url[ 0 ]. '.php';

        if ( file_exists( $controllerUrlFile ) ) {

            require_once $controllerUrlFile;
            $controller = new $url[ 0 ];
            $controller->loadModel($url[0]);  //aqui vamos a cargar el modelo y le pasamos el nombre del modelo el cual debe ser el mismo nombre que el contorlador
            //la funcion loadModel pertenece a la clase Controller

            if ( isset( $url[ 1 ] ) ) {  //aqui miramos si la url tiene otrp parametro ejemplo main/create aqui si tiene otro parametro que es create y hace refetencia al metodo 

                $controller-> {$url[ 1 ]}();  //se ejecuta el metodo que se recivio;

                }

            } else {

                $error = new Errors();

            }

        }
    }

    ?>

