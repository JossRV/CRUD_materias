<?php 
    session_start();
    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $nombreM=$_POST['nombre'];
    $creditos=$_POST['creditos'];
    $semestre=$_POST['semestre'];
    $carrera=$_POST['carrera'];

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
        $carrera
    );

    $obj=new metodos();
    if($obj->insertarDatos($datos)==1){
        $_SESSION['insertado']=1;
        header("location: ../index.php");
    }else{
        echo "no se agrego correctamente";
    }
    // echo $obj;
?>