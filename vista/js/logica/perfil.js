$(document).ready(function() { //cuando carga el documento html perfil.php. llama a la funcion.
    ajaxVerperfil();
})

function ajaxVerperfil(){
    $.ajax({
        url: "../controlador/action/ajax_verperfil.php",
       type: "POST",
       dataType: "json",

        success: function(result){ 
            $("#id_usuario").val(result.id);
            $("#nombre").val(result.nombre);
            $("#username").val(result.username);            
           //insertarUsuariosEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function ajaxRegistrarUsuario(nombre, correo, password, telefono, fechanac, sexo, pesokg, administrador){
    $.ajax({
        data: { 
                   "nombre" : nombre,
                   "correo" : correo,
                   "password" : password,
                   "telefono" : telefono,
                   "fechanac" : fechanac,
                   "sexo" : sexo,
                   "pesokg" : pesokg,
                   "administrador" : administrador
            },
            type: "POST",
            dataType: "json",
            url: "../controlador/accion/ajax_registrarUsuario.php",
    success: function(result){
        $('#modalCrearUsuario').modal('hide');
        insertarUsuarioEnTabla(nombre, correo, password, telefono, fechanac, sexo, pesokg, administrador);
    }})

}

//Para agregar un usuario en la tabla despues de que se crea
/*
function insertarUsuarioEnTabla(id,nombre,username){
    let usuario = ''
    let id = '0'
        usuario +='<tr id='+id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+id+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+nombre+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+username+'</td>'
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'
        +'</tr>'

    $("#datosusuario tbody").append(usuario);
    insertarDatosUsuarioEnModal();

}
*/