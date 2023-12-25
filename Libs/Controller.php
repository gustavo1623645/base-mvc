<?php

class Controller {

    function __construct() {

        $this->view = new View();
    }

    function loadModel($model){

        $url = "models/".$model.'model.php';

        if(file_exists($url)){

            require $url;

            $modelName = $model.'Model';  //aqui como la clase sera en camel case el segundo valor es en mayuscula arriva es en minusculas porque el archivo asi esta en minu
            $this->model = new $modelName();

        }

    }
}

?>