$(document).ready(function() { 
    ajaxVerUsuarios();
})

function ajaxVerUsuarios(){
    $.ajax({
        url: "../controlador/accion/ajax_verUsuarios.php",
        success: function(result){ 
           insertarUsuariosEnTabla(JSON.parse(result))
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

function insertarUsuariosEnTabla(result){
    let usuarios = ''

    $.each(result, function(i) {
     
        usuarios +='<tr id='+result[i].id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nombre+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].password+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].telefono+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].fechaNac+'</td>'
        +'<td width="10" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].sexo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].pesoKg+'</td>'
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../controlador/accion/act_eliminarUsuario.php?idUsuario='+result[i].id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    })

    $("#usuariosRegistrados tbody").append(usuarios)
    insertarDatosUsuarioEnModal()

}

//Para agregar un usuario en la tabla despues de que se crea
function insertarUsuarioEnTabla(nombre, correo, password, telefono, fechanac, sexo, pesokg, administrador){
    let usuario = ''
    let id = '0'
        usuario +='<tr id='+id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+nombre+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+password+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+telefono+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+fechanac+'</td>'
        +'<td width="10" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+sexo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+pesokg+'</td>'
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../controlador/accion/act_eliminarUsuario.php?idUsuario='+id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    $("#usuariosRegistrados tbody").append(usuario);
    insertarDatosUsuarioEnModal();

}


function insertarDatosUsuarioEnModal(){
    $(".editar").on("click",function(){
        let idUsuario = $(this).closest("tr").attr("id")
      
        $.ajax({
            type: "POST",
            data: {idUsuario: parseInt(idUsuario, 10)},
            url: "../controlador/accion/ajax_verUsuarioPorId.php",
            success: function(data){
                let usuario = JSON.parse(data)
             
                $("#modalEditarUsuario").modal('show');

                $("#modalEditarUsuario input[name='idUsuario']").val(usuario.id)
                $("#modalEditarUsuario input[name='nombre']").val(usuario.nombre)
                $("#modalEditarUsuario input[name='correo']").val(usuario.correo)
                $("#modalEditarUsuario input[name='password']").val(usuario.password)
                $("#modalEditarUsuario input[name='telefono']").val(usuario.telefono)
                $("#modalEditarUsuario input[name='fechanac']").val(usuario.fechaNac)

                if(usuario.sexo == 'F'){
                    $("#modalEditarUsuario .sexo option:eq(1)").prop('selected', true)
                }else{
                    $("#modalEditarUsuario .sexo option:eq(2)").prop('selected', true)
                }

                $("#modalEditarUsuario input[name='peso']").val(usuario.pesoKg)
                
                if(usuario.administrador == 1){
                    $("#modalEditarUsuario .rol option:eq(1)").prop('selected', true)
                }else{
                    $("#modalEditarUsuario .rol option:eq(2)").prop('selected', true)
                }
              
          }})

    })
}
