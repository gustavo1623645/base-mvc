<?php

  class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    function __contruct(){

        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connection(){
        try{

            $connnection = "mysql:host=".$this->host. ";dbname=".$this->db.";charset=".$this->charset;

            $options = [
                PDO::ATTR_ERRMODE             =>PDO::ERRMODE_EXEPCTION,
                PDO::ATTR_EMULATE_PREPARES    => false,
            ];

            $pdo =new PDO($connnection,  $this->user, $this->password, $options);
            return $pdo;

        }catch(PDOExepcion $e){
            
            print_r('error de conexion '.$e->getMessage());

        }
    }
  }

?>