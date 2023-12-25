<?php


class Consulta extends Controller{

    function __construct(){

        parent::__construct();
       $this->view->render('consultas/index');
    }

   
}

?>