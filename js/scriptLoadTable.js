$(document).ready(function(){


    var jsonToSend = {
                "action" : "LOADEMPLEADOS"
        };
    $.ajax({

        
            url:"data/appLayer.php",
            type : "POST",
            data : jsonToSend, 
            dataType : "json",
            contentType : "application/x-www-form-urlencoded",
            success: function(data){
                $('#Empleados').dataTable( {
                "data": data,
                "columns": [
                    { "data": "Nombre" },
                    { "data": "Nomina" },
                    { "data": "salario" },
                    { "data": "salarioNof" },
                    { "data": "Puesto" },
                    { "data": "Acciones" }
                ]
            });
            },
            error: function(errorMsg){
                alert("ERROR IN TABLE EMPLEADOS");
                console.log(errorMsg);
            }
    });
});
