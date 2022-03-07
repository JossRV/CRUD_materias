<?php 

    class conexion{
        public function conectar(){
            $servidor="localhost";
            $user="root";
            $password="";
            $bd="materias";
            $conectando=new mysqli(
                $servidor,
                $user,
                $password,
                $bd
            );
            return $conectando;
        }
    }

    // $obj=new conexion();
    // if($obj->conectar()){
    //     echo "Conectado";
    // }else{
    //     echo "fallo";
    // }

?>