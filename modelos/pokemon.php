<?php

    include_once("conexion.php");

    Class Pokemon{
        private $id;
        private $num_pokedex;
        private $nombre;
        private $tipo_1;
        private $tipo_2;
        private $mote;
        private $baya;

        private $con;

        public function __construct(){
            $this -> con = new Conexion();
        }

        public function get($atributo){
            return $this -> $atributo;
        }

        public function set($atributo, $contenido){
            return $this -> $atributo = $contenido;
        }

        public function listar_tabla(){
            $sql = "SELECT * FROM pokemon";
            $resultado = $this -> con -> consulta_retorno($sql);
            return $resultado;
        }

        public function ver_registro(){
            $sql = "SELECT * FROM pokemon WHERE id = {$this -> id}";
            $resultado = $this -> con -> consulta_retorno($sql);
            $registro = mysqli_fetch_assoc($resultado);

            $this -> num_pokedex = $registro["num_pokedex"];
            $this -> nombre = $registro["nombre"];
            $this -> tipo_1 = $registro["tipo_1"];
            $this -> tipo_2 = $registro["tipo_2"];
            $this -> mote = $registro["mote"];
            $this -> baya = $registro["baya"];

            return $registro;
        }

        public function crear(){
            $sql1 = "SELECT * FROM pokemon WHERE num_pokedex = {$this -> num_pokedex}";
            $resultado = $this -> con -> consulta_retorno($sql1);
            $filas = mysqli_num_rows($resultado);

            if ($filas == 0){
                $sql2 = "INSERT INTO pokemon (num_pokedex, nombre, tipo_1, tipo_2, mote, baya) VALUES ({$this -> num_pokedex}, '{$this -> nombre}', '{$this -> tipo_1}', '{$this -> tipo_2}', '{$this -> mote}', '{$this -> baya}')";
                // echo $sql2;
                $this -> con -> consulta_simple($sql2);
                return true;
            } else {
                return false;
            }

        }

        public function eliminar(){
            $sql = "DELETE FROM pokemon WHERE id = {$this -> id}";
            $this -> con -> consulta_simple($sql);
        }

        public function editar(){
            $sql = "UPDATE pokemon SET num_pokedex = {$this -> num_pokedex},
                nombre = '{$this -> nombre}',
                tipo_1 = '{$this -> tipo_1}',
                tipo_2 = '{$this -> tipo_2}',
                mote = '{$this -> mote}',
                baya = '{$this -> baya}' WHERE id = {$this -> id}";
            $this -> con -> consulta_simple($sql);
        }

    }

?>