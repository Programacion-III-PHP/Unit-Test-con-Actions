<?php 

    class UsuarioModelo{
        public $nombre;
        public $password;
        public $autenticado;

        public function Autenticar(){
            if ($this -> nombre === "usuario1" && $this -> password === "1234")
                $this -> autenticado = true;
            else 
                throw new Exception("Auth failed")              
        }

        public function listar(){
            var_dump(true);
            return array(
                "id" => 1,
                "nombre" => "pepito"
            );
        }
    }