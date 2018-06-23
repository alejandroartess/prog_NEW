<?php
namespace florida\models;
use mysqli;
    class Crud_database {
        var $conector;

        function __construct(){
            $conector=new mysqli ("localhost","root","","juegos");
            if ($conector->connect_errno){
                echo "Fallo al conectar a Mysql: ".$conector->connect_errno;
            }else{
                //echo "conexion establecida";
            }
            $this->conector=$conector;
        }//constructor


        function updateUser($user){
            $consultaupdate="UPDATE usuarios set nombre='".$user->getNombre()."', apellidos='".$user->getApellidos()."', edad=".$user->getEdad().", curso=".$user->getCurso().", puntuacion=".$user->getPuntuacion()." where id=".$user->getId();
            $update = $this->conector->query($consultaupdate);
            $resultado = $this->getUserbyId($user->getId());
            return $resultado;
        }

        function getAllUsers(){

            $allUser = $this->conector->query("SELECT * FROM usuarios");
            return $allUser;
        }
        function getUserbyId($id){

            $user = $this->conector->query("SELECT * FROM usuarios where id=".$id);
            return $user;
        }

        function deleteUser($id){
            $consultadelete="DELETE from usuarios where id=$id";
            $delete = $this->conector->query($consultadelete);
            $resultado = $this->getAllUsers();
            return $resultado;
        }

        function insertUser($user){
            $consultainsert="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('".$user->getNombre()."','".$user->getApellidos()."',".$user->getEdad().",'".$user->getCurso()."',".$user->getPuntuacion().")";
            $insert = $this->conector->query($consultainsert);
            $resultado = $this->getAllUsers();
            return $resultado;
        }
    }
?>
