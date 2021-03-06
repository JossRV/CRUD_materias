<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";
    $obj=new conexion();
    $objm=new metodos();
    $conexion=$obj->conectar();
    $id=$_GET['id'];
    $sql="SELECT * FROM t_materias WHERE id='$id'";
    $sqlcc="SELECT carrera FROM c_carrera";
    $sqlcs="SELECT semestre FROM c_semestre";
    $vercarr=$objm->mostrarDatos($sqlcc);
    $versemst=$objm->mostrarDatos($sqlcs);
    $resultado=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando</title>
    <?php require_once "../app/dependenciasForaneas.php" ?>
</head>

<body>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1>Actualizando datos</h1>
                <form action="../model/actualizar.php" method="post">
                    <input type="text" hidden value="<?=$id?>" name="id">
                    <div class="input-group mt-4">
                        <label class="input-group-text" for=""><i class="fas fa-bookmark"></i></label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$ver[1]?>" required>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="far fa-hourglass"></i></label>
                        <input type="text" class="form-control" name="creditos" id="creditos" value="<?=$ver[2]?>" required>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <select class="form-select" name="semestre" id="semestre">
                            <option value="<?=$ver[3]?>"><?=$ver[3]?></option>
                            <?php 
                                foreach($versemst as $key):
                            ?>
                            <option value="<?=$key['semestre']?>"><?=$key['semestre']?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <select class="form-select" name="carrera" id="carrera" required>
                            <option value="<?=$ver[4]?>"><?=$ver[4]?></option>
                            <?php 
                                foreach($vercarr as $key):
                            ?>
                            <option value="<?=$key['carrera']?>"><?=$key['carrera']?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-outline-dark container-fluid mt-4" id="btn_actualizar"> Actualizar </button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>