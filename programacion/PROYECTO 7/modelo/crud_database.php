<?php
    class crud_database {

        function crud_database(){
            
        }//constructor


        function updateUser($user){
            $consultaupdate="UPDATE usuarios set nombre='$user->getNombre()', apellidos='$user->getApellidos()', edad=$user->getEdad(), curso=$user->getCurso(), puntuacion=$user->getPuntuacion() where id=$id";
            $update = $conector->query($consultaupdate);
            $resultado = $this->getAllUsers();
        }

        function getAllUsers(){
            return $allUser;
        }

        function deleteUser($user){
            $consultadelete="DELETE from usuarios where id=$id";
            $delete = $conector->query($consultadelete);
            $resultado = $this->getAllUsers();
            return $resultado;
        }

        function insertUser($user){
            $consultainsert="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$user->getNombre()','$user->getApellidos()',$user->getEdad(),$user->getCurso(),$user->getPuntuacion())";
            $insert = $conector->query($consultainsert);
            $resultado = $this->getAllUsers();
            return $resultado;
        }
    }
?>