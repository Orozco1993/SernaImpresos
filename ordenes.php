<?php
/**
 * Created by PhpStorm.
 * User: edgarserna
 * Date: 4/18/17
 * Time: 8:17 PM
 */
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
    <script type = "text/javascript" src="js/mantenimiento.js"></script>
    <title>Serna Impresos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">

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
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">Serna Impresos</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> </li>
                    <li class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="empleados.php"><i class="fa fa-fw fa-users"></i> Empleados</a>
                    </li>
                    <li>
                        <a href="nomina.php"><i class="fa fa-fw fa-table"></i> Nomina</a>
                    </li>
                    <li>
                        <a href="ordenes.php"><i class="fa fa-fw fa-edit"></i> Ordenes</a>
                    </li>
                    <li>
                        <a href="facturas.php"><i class="fa fa-fw fa-file"></i> Facturas</a>
                    </li>
                    <li>
                        <a href="mantenimiento.php"><i class="fa fa-fw fa-wrench"></i> Mantenimiento</a>
                    </li>
                    <li>
                        <a href="soporte.php"><i class="fa fa-fw fa-info-circle"></i> Soporte</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="container" style="width: 100%;"><h2>Ordenes de Compra</h2></div>

                    <div id="exTab2" class="container"> 
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a  href="#1" data-toggle="tab">Overview</a>
                        </li>
                        <li><a href="#2" data-toggle="tab">Without clearfix</a>
                        </li>
                        <li><a href="#3" data-toggle="tab">Solution</a>
                        </li>
                    </ul>

            <div class="tab-content ">
                <div class="tab-pane active" id="1">
                    <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                </div>
            <div class="tab-pane" id="2">
                <h3>Notice the gap between the content and tab after applying a background color</h3>
            </div>
            <div class="tab-pane" id="3">
                <h3>add clearfix to tab-content (see the css)</h3>
            </div>
            </div>
  </div>




                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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
