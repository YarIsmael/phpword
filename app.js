$("#BtnGenerar").on("click",function() {
    documento = $("#usuario_documento").val();
    $.ajax({
        url:"controlador.php",
        type:"POST",
         data:{opcion:"listar", documento:documento},
        }).done(function(data){
            if(data==1){
             alert("error");
            }else{
                var  datos = JSON.parse(data);
                $.each(datos, function(i, item){
                  nombre = datos[i].nombre;
                  apellido = datos[i].apellido;
                  documento = datos[i].documento;
                  documento_tipo = datos[i].documento_tipo;
                  programa_tipo = datos[i].programa_tipo;
                  programa_ficha = datos[i].programa_ficha;
                  programa = datos[i].programa;
                });
                $.ajax({
                   url:"docplantilla.php",
                   type:"POST",
                   data:{nombre:nombre, apellido:apellido, documento:documento,documento_tipo:documento_tipo,programa_ficha:programa_ficha,
                    programa_tipo:programa_tipo, programa:programa}
                })
                 $(location).attr('href', "docplantilla.php");
            }
       })
  });