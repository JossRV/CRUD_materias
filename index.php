<?php
    session_start();
    require_once "clases/conexion.php";
    require_once "clases/metodos.php";
    $obj=new metodos();
    $sql="SELECT * FROM t_materias";
    $sqlcc="SELECT carrera FROM c_carrera";
    $sqlcs="SELECT semestre FROM c_semestre";
    $ver=$obj->mostrarDatos($sql);
    $vercarr=$obj->mostrarDatos($sqlcc);
    $versemst=$obj->mostrarDatos($sqlcs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <?php require_once "app/dependencias.php" ?>
</head>
<body>
    <div class="container mt-5 my-5 text-center">
        <div class="row">
            <div class="col">
                <h1>MATERIAS</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4">
                <form action="model/insertar.php" method="post">
                    <div class="input-group mt-4">
                        <label class="input-group-text" for=""><i class="fas fa-bookmark"></i></label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la materia" required>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="far fa-hourglass"></i></label>
                        <input type="text" class="form-control" name="creditos" id="creditos" placeholder="Creditos de clases" required>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <select class="form-select" name="semestre" id="semestre" required>
                            <option value="">Selecciona semestre</option>
                            <?php 
                                foreach($versemst as $key):
                            ?>
                            <option value="<?=$key['semestre']?>"><?=$key['semestre']?></option>
                            <?php 
                                endforeach;
                            ?>
                            <!-- <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option> -->
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for=""><i class="fas fa-paste"></i></label>
                        <select class="form-select" name="carrera" id="carrera" required>
                            <option value="">Selecciona carrera</option>
                            <?php 
                                foreach($vercarr as $key):
                            ?>
                            <option value="<?=$key['carrera']?>"><?=$key['carrera']?></option>
                            <?php 
                                endforeach;
                            ?>
                            <!-- <option value="sis">Ingenieria en Sistemas Computacionales</option>
                            <option value="ige">Ingenieria en Gestion Empresarial</option>
                            <option value="ind">Ingenieria Industruial</option> -->
                        </select>
                    </div>
                    <button class="btn btn-outline-dark container-fluid mt-4" id="btn_agregar"> Agregar </button>
                </form>
            </div>
            <div class="col-8">
                <table border="3" class="table table-bordered border-dark ">
                    <thead>
                        <th>Nombre</th>
                        <th>Creditos</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($ver as $key):
                        ?>
                        <tr>
                            <td><?= $key['nombreM'] ?></td>
                            <td><?= $key['creditos'] ?></td>
                            <td><?= $key['semestre'] ?></td>
                            <td><?= $key['carrera'] ?></td>
                            <td><a href="./view/vista_actualizar.php?id=<?=$key['id']?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="./model/eliminar.php?id=<?=$key['id']?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php 

    if(isset($_SESSION['insertado'])==1){
        echo "
            <script>
                // alert('Insertado con exito');
                swal({
                    title:'Excelente!',
                    text:'Insertado con exito',
                    icon:'success',
                    button:'Aceptar',
                });
                // swal('insertado con exito');
            </script>
        ";
        // session_destroy();
    }
    if(isset($_SESSION['eliminado'])==1){
        echo "
            <script>
                // alert('Insertado con exito');
                swal({
                    title:'Excelente!',
                    text:'Eliminado con exito',
                    icon:'success',
                    button:'Aceptar',
                });
                // swal('insertado con exito');
            </script>
        ";
    }
    if(isset($_SESSION['actualizado'])==1){
        echo "
            <script>
                swal({
                    title:'Excelente!',
                    text:'Actualizado con exito',
                    icon:'success',
                    button:'Aceptar',
                });
            </script>
        ";
    }
    session_destroy();

?>