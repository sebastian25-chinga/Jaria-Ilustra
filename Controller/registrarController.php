<?php
    
require_once '../Model/consultas.php';

class Controlador{
    public function registroUsuarioController($nombre, $apellidos, $email, $password){
        if (isset($_POST['nombreRegister'])) {
            $nombre = $_POST['nombreRegister'];
            $apellidos = $_POST['apellidosRegister'];
            $email = $_POST['emailRegister'];
            $password = $_POST['passwordRegister'];

            $respuesta = new Consultas;
            $respuesta->registrarUsuarioModel($nombre, $apellidos, $email, $password);
        }else{
            echo 'Hubo un error';
        }
    }
}

