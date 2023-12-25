<?php

class NuevoModel extends Model{
    

    function __construct(){
        
        parent::__construct(); //aqui ejecutamos el contructor del padre que es donde se crear la instancia para hacer la conexion a la base de datos
    }

    function insert(){
        echo 'aqu se guardara';
    }
}

?>