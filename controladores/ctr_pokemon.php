<?php

    include_once("modelos/pokemon.php");

    Class ControladorPokemon{
        private $pokemon;

        public function __construct(){
            $this -> pokemon = new Pokemon();
        }

        public function index(){
            $resultado = $this -> pokemon -> listar_tabla();
            return $resultado;
        }

        public function ver_info_pokemon($id){
            $this -> pokemon -> set("id", $id);
            return $this -> pokemon -> ver_registro();
        }

        public function crear_pokemon($num_pokedex, $nombre, $tipo_1, $tipo_2, $mote, $baya){
            $this -> pokemon -> set("num_pokedex", $num_pokedex);
            $this -> pokemon -> set("nombre", $nombre);
            $this -> pokemon -> set("tipo_1", $tipo_1);
            $this -> pokemon -> set("tipo_2", $tipo_2);
            $this -> pokemon -> set("mote", $mote);
            $this -> pokemon -> set("baya", $baya);

            $resultado = $this -> pokemon -> crear();
            return $resultado;
        }

        public function eliminar_pokemon($id){
            $this -> pokemon -> set("id", $id);
            return $this -> pokemon -> eliminar();
        }

        public function editar_pokemon($num_pokedex, $nombre, $tipo_1, $tipo_2, $mote, $baya){
            $this -> pokemon -> set("num_pokedex", $num_pokedex);
            $this -> pokemon -> set("nombre", $nombre);
            $this -> pokemon -> set("tipo_1", $tipo_1);
            $this -> pokemon -> set("tipo_2", $tipo_2);
            $this -> pokemon -> set("mote", $mote);
            $this -> pokemon -> set("baya", $baya);

            $this -> pokemon -> editar();
        }
    }
?>