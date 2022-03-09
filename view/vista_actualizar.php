<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";
    $obj=new conexion();
    $conexion=$obj->conectar();
    $id=$_GET['id'];
    $sql="SELECT * FROM t_materias WHERE id='$id'";
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
                        <input type="text" class="form-control" name="nombre" value="<?=$ver[1]?>">
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="far fa-hourglass"></i></label>
                        <input type="text" class="form-control" name="creditos" value="<?=$ver[2]?>">
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <select class="form-select" name="semestre">
                            <option value="<?=$ver[3]?>"><?=$ver[3]?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <input type="text" class="form-control" name="carrera" value="<?=$ver[4]?>">
                    </div>
                    <button class="btn btn-outline-dark container-fluid mt-4"> Actualizar </button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>