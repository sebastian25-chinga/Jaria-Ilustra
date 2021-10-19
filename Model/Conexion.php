<?php

class Conexion{
    public function conectar(){

        try {
            $cn = new PDO("mysql:host=localhost; dbname=jaria_ilustra", "root", "");
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
        
    }
}
?>