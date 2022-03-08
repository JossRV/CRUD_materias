$(document).ready(()=>{

    // alertaPrincipal("Cargado con exito");
    
    // let nombre=$('#nombre').val();
    // let creditos=$('#creditos').val();
    // let semestre=$('#semestre').val();
    // let carrera=$('#carrera').val();

    function alertaPrincipal(msj){
        Swal.fire({
            title:msj,
            icon:"success",
            button:"Aceptar"
        })
    }

    function alertaValidacion(msj){
        Swal.fire({
            title:"Error!",
            text:msj,
            icon:"danger",
            button:"Aceptar"
        })
    }

    // Validacion vacios
    function validacion(){
        if($('#nombre').val()=="" & $('#creditos').val()=="" & $('#semestre').val()=="" & $('#carrera').val()==""){
            alertaValidacion("Todos los campos estan vacios");
        }else if($('#nombre').val()==""){
            alertaValidacion("Campo nombre de la materia vacio");
        }else if($('#creditos').val()==""){
            alertaValidacion("Campo credito de clases esta vacio");
        }else if($('#semestre').val()==""){
            alertaValidacion("No ha seleccionado el semestre");
        }else if($('#carrera').val()==""){
            alertaValidacion("no ha seleccionado la carrera");
        }else{
            alertaPrincipal("Cargado con exito");
        }
    }

    $('#btn_agregar').click(function(){
        validacion();
    });
    
});