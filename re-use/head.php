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
        <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>index.html" class="logo">
                <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>/img/Logo_horizontal2.jpg">
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
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
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
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
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
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
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
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
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
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
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>index.php">
                                <i class="fa fa-dashboard"></i> <span>Inicio</span>
                            </a>
                        </li>
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Clientes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>pages/cliente/agregar_cliente.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                            Agregar Cliente
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>pages/cliente/buscar_cliente.php">
                                        <i class="fa fa-angle-double-right"></i> Buscar Cliente
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>pages/cliente/modificar_cliente.php">
                                        <i class="fa fa-angle-double-right"></i>
                                            Modificar Cliente 
                                    </a>
                                </li-->
                                <!--li>
                                    <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>pages/cliente/eliminar_cliente.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Eliminar Cliente
                                    </a>
                                </li>
                            </ul>
                        </li-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Guias</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>guia/agregar_guia.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Agregar Guia
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>guia/buscar_guia.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Buscar Guia 
                                    </a>
                                </li>
                                <!--li>
                                    <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>guia/eliminar_guia.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Eliminar Guias
                                    </a>
                                </li-->
                                <li>
                                    <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>guia/crear_ot.php">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Crear OT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text"></i> <span>Orden De Trabajo</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <!--li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/lista_ot.php"><i class="fa fa-angle-double-right"></i>Buscar OT</a></li-->
                                <!--li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/lista_ot.php"><i class="fa fa-angle-double-right"></i>Buscar OT</a></li-->
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/ot_pendientes.php"><i class="fa fa-angle-double-right"></i>OT en Proceso</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/reprocesos.php"><i class="fa fa-angle-double-right"></i>Reprocesos</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/division_ot.php"><i class="fa fa-angle-double-right"></i>División de OT</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>ot/agregar_lote.php"><i class="fa fa-angle-double-right"></i>crear Lote</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>etapas/modificar_etapa.php"><i class="fa fa-angle-double-right"></i>Modificar Etapa</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>etapas/compromisos_ot.php"><i class="fa fa-angle-double-right"></i>Compromisos</a></li>
                                <!--li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>etapas/etapa.php"><i class="fa fa-angle-double-right"></i>Modificar Etapa</a></li-->
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-flask"></i> <span>Laboratorio</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>laboratorio/agregar_laboratorio.php"><i class="fa fa-angle-double-right"></i>Ingresar Laboratorio</a></li>
                                <!--li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>laboratorio/buscar_laboratorio.php"><i class="fa fa-angle-double-right"></i>Modificar Laboratorio</a></li-->
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>laboratorio/orden_laboratorio.php"><i class="fa fa-angle-double-right"></i>Crear Orden Laboratorio</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>laboratorio/auxiliar_reactivo.php"><i class="fa fa-angle-double-right"></i>Auxiliar Reactivo </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Recetas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>recetas/lista_recetas.php"><i class="fa fa-angle-double-right"></i>Lista Recetas</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>laboratorio/lista_orden_lab.php"><i class="fa fa-angle-double-right"></i>Recetas Pendientes</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>recetas/buscar_recetas.php"><i class="fa fa-angle-double-right"></i>Modificar Recetas</a></li>
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>recetas/agregar_recetas.php"><i class="fa fa-angle-double-right"></i>Ingresar Recetas Etapas</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dropbox"></i> <span>Bodega</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>bodega/lista_bodega.php"><i class="fa fa-angle-double-right"></i>Bodegas</a></li>
                                <li>
                                    <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>productos/lista_producto.php">
                                        <i class="fa fa-angle-double-right"></i> <span>Productos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>proveedor/lista_proveedor.php">
                                        <i class="fa fa-angle-double-right"></i> Proveedores
                                    </a>
                                </li>
                                <!--li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>bodega/lista_bodega.php"><i class="fa fa-angle-double-right"></i>Buscar bodega</a></li-->
                            </ul>
                        </li>

                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i> <span>Maquinaria</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>maquinaria/agregar_maquinaria.php"><i class="fa fa-angle-double-right"></i>Ingresar Maquinaria</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>maquinaria/buscar_maquinaria.php"><i class="fa fa-angle-double-right"></i>Modificar Maquinaria</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>maquinaria/mantencion_maquinaria.php"><i class="fa fa-angle-double-right"></i>Mantencion Maquinaria</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>maquinaria/configuracion_maquinaria.php"><i class="fa fa-angle-double-right"></i>Configuracion Maquinaria</a></li>

                            </ul>
                        </li-->
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-child"></i> <span>Personal</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>personal/agregar_personal.php"><i class="fa fa-angle-double-right"></i>Ingresar Personal</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>personal/lista_personal.php"><i class="fa fa-angle-double-right"></i>Buscar Personal</a></li>
                            </ul>
                        </li-->
                        <li>
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>cliente/lista_cliente.php">
                                <i class="fa fa-users"></i> <span>Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>personal/lista_personal.php">
                                <i class="fa fa-child"></i> <span>Personal</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>reportes/index.php">
                                <i class="fa fa-area-chart"></i> <span>Reportes</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>maquinaria/lista_maquinaria.php">
                                <i class="fa fa-gears"></i> <span>Maquinaria</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>consumos/consumos.php">
                                <i class="fa  fa-plug"></i> <span>Consumos</span>
                            </a>
                        </li>
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> <span>Productos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>productos/agregar_producto.php"><i class="fa fa-angle-double-right"></i>Ingresar Producto</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>productos/lista_producto.php"><i class="fa fa-angle-double-right"></i>Buscar Producto</a></li>
                            </ul>
                        </li-->
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-slideshare"></i> <span>Proveedor</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>proveedor/agregar_proveedor.php"><i class="fa fa-angle-double-right"></i>Ingresar proveedor</a></li>
                                <li><a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>proveedor/lista_proveedor.php"><i class="fa fa-angle-double-right"></i>Buscar proveedor</a></li>
                            </ul>
                        </li-->
                        <li>
                            <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/pages/'; ?>mantenedor/mantenedor.php">
                                <i class="fa fa-qrcode"></i> <span>Mantenedor</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i>  Multilevel Menu
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        First level
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>

                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="#">
                                                Second level
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </a>

                                            <ul class="treeview-menu">
                                                <li>
                                                    <a href="#">Third level</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>