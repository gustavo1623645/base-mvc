<?php

class Model{

    function __construct(){

        $this->db = new Database();
        //las clases hijas que hereden esto al crear la instancia se inicializara la conexion

    }
}

?>