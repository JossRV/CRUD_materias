<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $nombreM=$_POST['nombre'];
    $creditos=$_POST['creditos'];
    $semestre=$_POST['semestre'];
    $carrera=$_POST['carrera'];
    $id=$_POST['id'];

    // switch($opc){
    //     case "sis":
    //         $carrera="Ingenieria en Sistemas Computacionales";
    //         break;
    //     case "ige":
    //         $carrera="Ingenieria en Gestion Empresarial";
    //         break;
    //     case "ind":
    //         $carrera="Ingenieria Industruial";
    //         break;
    // }

    $datos=array(
        $nombreM,
        $creditos,
        $semestre,
        $carrera,
        $id
    );

    $obj=new metodos();
    if($obj->actualizarDatos($datos)==1){
        header("location: ../index.php");
    }else{
        echo "no se actualizaron los datos";
    }

?>