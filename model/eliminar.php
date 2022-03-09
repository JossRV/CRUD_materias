<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $id=$_GET['id'];
    $obj=new metodos();
    
    if($obj->eliminarDatos($id)==1){
        header("location: ../index.php");
    }else{
        echo "no se ha eliminado";
    }

?>