<?php
    class crud_database {
        var $conector;//En las clases no se puede utilizar variables de fuera,
        //asi que tenemos que crear una dentro de la clase para que cada objeto la pueda utilizar
        //y pasarsela como parametro
        function crud_database($conector){
            $this->conector=$conector;
        }//constructor


        function updateUser($user){
            $consultaupdate="UPDATE usuarios set nombre='$user->getNombre()', apellidos='$user->getApellidos()', edad=$user->getEdad(), curso=$user->getCurso(), puntuacion=$user->getPuntuacion() where id=$id";
            $update = $this->conector->query($consultaupdate);
            $resultado = $this->getAllUsers();
        }

        function getAllUsers(){
            $allUser = $this->conector->query("SELECT * FROM usuarios");
            return $allUser;
        }

        function deleteUser($id){
            $consultadelete="DELETE from usuarios where id=$id";
            $delete = $this->conector->query($consultadelete);
            $resultado = $this->getAllUsers();
            return $resultado;
        }

        function insertUser($user){
            //la sintaxis de la consulta estaba mal construida
            $consultainsert="INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('".$user->getNombre()."','".$user->getApellidos()."',".$user->getEdad().",'".$user->getCurso()."',".$user->getPuntuacion().")";
            $insert = $this->conector->query($consultainsert);
            $resultado = $this->getAllUsers();
            return $resultado;
        }
    }
?>