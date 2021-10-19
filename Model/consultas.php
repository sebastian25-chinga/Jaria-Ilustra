<?php

require_once 'Conexion.php';

class Consultas extends Conexion{
  //metodo para registro de usuarios
  public function registrarUsuarioModel($nombre, $apellidos, $email, $password){

    //$stmt = Conexion::conectar()->prepare("INSERT INTO usuarios (nombre, apellidos, email, password) VALUES (:nombre, :apellidos, :email, :password)");

    $modelo = new Conexion();
    $conexion = $modelo->conectar();

    $sql = "INSERT INTO usuarios (nombre,apellidos,email,password) VALUES (:nombre, :apellidos,:email,:password)";
    $sen = $conexion->prepare($sql);
    $sen->bindParam(':nombre',$nombre);
    $sen->bindParam(':apellidos', $apellidos);
    $sen->bindParam(':email',$email);
    $sen->bindParam(':password', $password);

    if ($sen->execute()) {
      return true;
    }else{
      return false;
    }

    // var_dump($sql);
  }

  public function ingresarUsuarioModel($email){
    $modelo = new Conexion();
    $conexion = $modelo->conectar();
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email AND pass = :password');
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);
	  $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC);

    // $message = '';

	  if (count($results)) {
      return true;
    } else {
      return false;
    }

  }

  public function mostrarUsuariosModel(){

  }

  public function mostrarPedidosModel(){
    
  }

}

?>