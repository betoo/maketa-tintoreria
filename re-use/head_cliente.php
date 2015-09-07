<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/jquery/jquery-2.1.3.min.js"></script>
        <!--Jquery UI-->
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <!--fancyapp-->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
        <!--link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" /-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Ionicons -->
        <!--link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" /-->
        <!--buscador en tabla-->
        <!--script type="text/javascript" src="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/search_tbl/search_tbl.js"></script-->
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/estilos.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!--date-->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/funciones/funciones.js"></script>
        <!--Edit table-->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/editable/numeric-input-example.js"></script>
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/editable/mindmup-editabletable.js"></script>
         <!-- DATA TABES SCRIPT -->
        <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        
    </head>
    
    <style type="text/css">
        .right-side{
            margin-left: 0px;
        }
    </style>

    <body class="skin-blue">
        <header class="header">
            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>index.html" class="logo">
                <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>/img/Logo_horizontal2.jpg">
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!--a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="mensaje_small dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li id="msj_small">
                                    
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu ">
                                <li class="header">You have 10 notifications</li>
                                <li class="detalle_alerta_small">
                                    
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <!--a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a-->
                            <!--ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul-->
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>