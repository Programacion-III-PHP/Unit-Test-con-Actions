<?php
use PHPUnit\Framework\TestCase;
require 'modelos/UsuarioModelo.class.php';

final class UsuarioModeloTests extends TestCase{
    public function testAutenticacionCorrecta(): void{
        try{
            $u = new UsuarioModelo();
            $u -> nombre = "usuario1";
            $u -> password = "1234";
            $u -> Autenticar();
            $this->assertTrue($u -> autenticado);

        }
        catch (Exception $e){
            $this->assertTrue(false);
        }
    }    
    public function testAutenticacionIncorrecta(): void{
        try{
            $u = new UsuarioModelo();
            $u -> nombre = "usuario13232332";
            $u -> password = "1234";
            $u -> Autenticar();
            $this->assertTrue(false);

        }
        catch (Exception $e){
            $this->assertTrue(true);
        }
    }  
    public function testInstanciar(): void{
        $u = new UsuarioModelo();
        $this -> assertTrue($u instanceof  UsuarioModelo);
    }      

    public function testListar(): void{
        $u = new UsuarioModelo();
        $this -> assertNotNull($u -> Listar());
        $this -> assertTrue(is_array($u -> Listar()));
        $this -> assertEquals("1",$u -> Listar()['id']);
        $this -> assertEquals("pepito",$u -> Listar()['nombre']);
    }
}
