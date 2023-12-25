<?php


class Nuevo extends Controller{

    function __construct(){

        parent::__construct();
       $this->view->render('nuevo/index');
    }


    function store(){
        echo 'aqui es el controlador nuevo';
        //aqui mandamos a llamar el metodo de nuestro modelo llamado nuevoModel donde tiene la instancia  conexiona la base de datps 
        $this->model->insert();
        //el metodo insert pertenece a la clase  nuevoModel del archico nuevomodel

    }

   
}

?>