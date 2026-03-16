<?php
/*

    class Conexion{
        public function conectar(){
            $servidor = "localhost";
            $usuario = "emanuel";
            $password = "ema290803";
            $db = "helpdesk";
            $conexion = mysqli_connect($servidor,$usuario,$password,$db);
            return $conexion;
        }
    }
*/
class Conexion{
    public function conectar(){
        $servidor = "localhost";
        $usuario = "emanuel";
        $password = "ema290803";
        $db = "helpdesk";

        $conexion = mysqli_connect($servidor,$usuario,$password,$db);

        if(!$conexion){
            die("Error de conexion: " . mysqli_connect_error());
        }

        return $conexion;
    }
}
?>