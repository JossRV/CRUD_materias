<?php 

class metodos{
    public function mostrarDatos($sql){
        $obj=new conexion();
        $conexion=$obj->conectar();
        $resultado=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    }
    public function insertarDatos($datos){
        $obj=new conexion();
        $conexion=$obj->conectar();
        $sql="INSERT INTO t_materias (nombreM,creditos,semestre,carrera)
              VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
        return $resultado=mysqli_query($conexion,$sql);
    }
    public function actualizarDatos($datos){
        $obj=new conexion();
        $conexion=$obj->conectar();
        $sql="UPDATE t_materias SET nombreM='$datos[0]',
                                    creditos='$datos[1]',
                                    semestre='$datos[2]',
                                    carrera='$datos[3]'
                                    WHERE id='$datos[4]'";
        return $resultado=mysqli_query($conexion,$sql);
    }
    public function eliminarDatos($id){
        $obj=new conexion();
        $conexion=$obj->conectar();
        $sql="DELETE FROM t_materias WHERE id='$id'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>