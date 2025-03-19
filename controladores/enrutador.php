<?php

    Class Enrutador{
        public function validar_vista($var){
            if(empty($var)){
                include_once("vistas/inicio.php");
            } else {
                return true;
            }
        }

        public function cargar_vista($vista){
            echo "La vista es: {$vista}";

            switch($vista){
                case "crear":
                    include_once("vistas/{$vista}.php");
                    break;
                case "ver":
                    include_once("vistas/{$vista}.php");
                    break;
                case "editar":
                    include_once("vistas/{$vista}.php");
                    break;
                case "eliminar":
                    include_once("vistas/{$vista}.php");
                    break;
                default:
                    include_once("vistas/error.404.php");
                    break;
            }
        }
    }

?>