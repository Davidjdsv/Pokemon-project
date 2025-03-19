<?php

    Class Conexion{
        private $host;
        private $user;
        private $pass;
        private $db;

        private $con;

        public function __construct(){
            $this -> host = "localhost";
            $this -> user = "root";
            $this -> pass = "";
            $this -> db = "db_pokemon";

            
        }

        public function consulta_retorno($sql){
            $consulta = mysqli_query($this -> con, $sql);
            return $consulta;
        }

        public function consulta_simple($sql){
            mysqli_query($this -> con, $sql);
        }
    }

    // $con = new Conexion();

?>