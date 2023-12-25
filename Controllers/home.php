<?php

 class Home extends Controller{

   function __construct(){

       parent::__construct();

      $this->view->mensaje = 'esta es la pagina de home bienvenido ';
      $this->view->render('home/index');

   }

   function index(){

    echo 'este es el metodo index';
}

}


?>