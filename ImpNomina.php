<?php
if (!isset($_SESSION)) {
    session_start();
}

if (($_SESSION['Usuario'] == NULL)) {
    header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type = "text/javascript" src="js/ImpNomina.js"></script>

    <title>Serna Impresos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="dist/css/style2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include 'sideBar.php'; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recibo</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

            <div id="exTab2" class="container" style="width: 100%;">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a  href="#1" data-toggle="tab">Salario</a>
                    </li>
                    <!--<li><a href="#2" data-toggle="tab">Salario NOF</a>
                    </li> -->
                </ul>

                <div class="tab-content ">
                    <div class="tab-pane active" id="1"><br>
                        <div class="col-lg-12">
                            <div>
                                <form>
                                    <fieldset style="...">
                                        <span> <img src="img/logo.png" alt="logo" height="102" width="182"></span>
                                        <label for="nombres">Nombre<br>
                                            <select type="text" id="nombres" name="nombres" onchange="jsfunction()">
                                                <option value="">Seleccione una opcion ...</option>
                                            </select>
                                            <span style="color:red"> <span id="errorNombre"></span> </span>
                                        </label>

                                        <label for="rfc"> RFC<br>
                                            <input type="text" id="rfc" name="rfc" placeholder="Nomina" ><br>
                                            <span style="color:red"> <span id="errorLabelRfc"></span> </span>
                                        </label>
                                        <label for="salario">Salario por Hora <br>
                                            <input type="text" id="salarioHora" name="salarioHora" placeholder="Salario por Hora" ><br>
                                            <span style="color:red"> <span id="errorSalarioHora"></span> </span>
                                        </label> <br>
                                    </fieldset>
                                </form><br>
                                <label for="fecha">Fecha<br>
                                    <input type="date" id="fecha" name="fecha" ><br>
                                    <span style="color:red"> <span id="errorFecha"></span> </span>
                                </label>
                                <label for="finis">Fecha de Inicio<br>
                                    <input type="date" id="finis" name="finis" ><br>
                                    <span style="color:red"> <span id="errorFechaIni"></span> </span>
                                </label>
                                <label for="fechafins">Fecha final<br>
                                    <input type="date" id="fechafins" name="fechafins" ><br>
                                    <span style="color:red"> <span id="errorFechaFin"></span> </span>
                                </label>

                            </div>
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" align="center"> Ingresos </h3>
                                    </div>
                                    <div id="ingBox">
                                        <table id="ingresos">
                                            <tr>
                                                <th>Sueldo del Periodo</th>
                                                <th>Premio de Puntualidad</th>
                                                <th>Premio de Asistencia</th>
                                                <th>Sub-Total</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" align="center"> Deducciones </h3>
                                    </div>
                                    <div id="dedBox">
                                        <table id="deducciones">
                                            <tr>
                                                <th style="width:270px">ISR</th>
                                                <th style="width:270px">IMSS</th>
                                                <th style="width:270px">Infonavit</th>
                                                <th style="width:270px">Subsidio al empleo</th>
                                                <th style="width:270px">Sub-Total</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="total"> <br>
                                    <input type="text" id="total" name="total" placeholder="Total" >
                                </label>
                            </div>
                            <p>
                                <button style="width:300px" id="Calcula" type="button" class="btn btn-md btn-success btn-block"> Generar Nomina</button>
                            </p>

                            <!-- /.panel -->
                        </div>

                    </div>
                    <div class="tab-pane" id="2"><br>
                        <div class="col-lg-12">
                            <div>
                                <form>
                                    <fieldset style="...">
                                        <span> <img src="img/logo.png" alt="logo" height="102" width="182"></span>
                                        <label for="nombrenof"><br>
                                            <select type="text" id="nombrenof" name="nombrenof" >
                                                <option value="">Seleccione un empleado ...</option>
                                                <option value=""> </option>
                                                <option value=""> </option>
                                            </select>
                                            <span style="color:red"> <span id="errorNombre"></span> </span>
                                        </label>
                                        <label for="rfc">RFC <br>
                                            <input type="text" id="rfc" name="rfc" placeholder="Nomina" ><br>
                                            <span style="color:red"> <span id="errorLabelRfc"></span> </span>
                                        </label> <br>
                                    </fieldset>
                                </form><br>
                                <label for="fecha">Fecha<br>
                                    <input type="date" id="fecha" name="fecha" ><br>
                                    <span style="color:red"> <span id="errorFecha"></span> </span>
                                </label>
                                <label for="fini">Fecha de Inicio<br>
                                    <input type="date" id="fini" name="fini" ><br>
                                    <span style="color:red"> <span id="errorFechaIni"></span> </span>
                                </label>
                                <label for="fechafin">Fecha final<br>
                                    <input type="date" id="fechafin" name="fechafin" ><br>
                                    <span style="color:red"> <span id="errorFechaFin"></span> </span>
                                </label>

                            </div>
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" align="center"> Ingresos </h3>
                                    </div>
                                    <div id="ingBox">
                                        <table id="ingresos">
                                            <tr>
                                                <th style="width:220px"> Otras Persepciones</th>
                                                <th style="width:220px">Premio de Puntualidad</th>
                                                <th style="width:220px">Premio de Asistencia</th>
                                                <th style="width:220px">Despensa</th>
                                                <th style="width:220px">Extras</th>
                                                <th style="width:220px">Sub-Total</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" align="center"> Deducciones </h3>
                                    </div>
                                    <div id="dedBox">
                                        <table id="deducciones">
                                            <tr>
                                                <th> </th>
                                                <th> </th>
                                                <th> </th>
                                                <th> </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script>
        var $nombre = $("#nombres");
        function jsfunction(){
            var jsonToSend = {
                "action" : "EMPLEADO",
                "Nombre" : $nombre.val()
            };

            console.log(jsonToSend);
            $.ajax({
                url : "data/appLayer.php",
                type: "POST",
                data: jsonToSend, //Data to send to the service
                datatype : "json",
                contentType : "application/x-www-form-urlencoded", //Forces the content type to json

                success : function(data){
                    console.log(data);
                    var nom = data[0].Nomina;
                    var sal = data[0].Salario;
                    console.log(data[0].Salario);
                    document.getElementById("rfc").value = nom;
                    document.getElementById("salarioHora").value = sal;
                },
                error : function(errorMessage){
                    console.log(errorMessage);
                    window.location.replace("nomina.php");
                }
            });
        }
    </script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>


