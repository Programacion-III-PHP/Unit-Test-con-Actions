<?php 

    class UsuarioModelo{
        public $nombre;
        public $password;
        public $autenticado;

        public function Autenticar(){
            if ($nombre === "usuario1" && $password === "1234")
                $autenticado = true;
            else 
                throw new Exception("Auth failed");               
        }

        public function listar(){
            return array(
                "id" => 1,
                "nombre" => "pepito"
            );
        }
    }