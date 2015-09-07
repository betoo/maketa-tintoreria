<?php
    include('re-use/head.php');
    
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Inicio
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row widgets_index">
                        <div id="ot_index" class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                    </h3>
                                    <p>
                                        Ordenes de Trabajo
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <a href="pages/ot/lista_ot.php" class="small-box-footer">
                                    Ver más <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div id="ord_lab_index" class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <!--sup style="font-size: 20px">%</sup-->
                                    </h3>
                                    <p>
                                        Ordenes de Laboratorio
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-flask"></i>
                                </div>
                                <a href="pages/laboratorio/lista_orden_lab.php" class="small-box-footer">
                                    Ver más <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div id="cliente_index" class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                    </h3>
                                    <p>
                                        Clientes
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="pages/cliente/lista_cliente.php" class="small-box-footer">
                                    Ver más <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div id="reporte_index" class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                    </h3>
                                    <p>
                                        Reportes
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="pages/reportes/index.php" class="small-box-footer">
                                    Ver más <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content_home">
                            <div class="col-md-12">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Producción en Línea</h3>
                                    <div class="box-tools pull-right">
                                    </div>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Etapa Actual</th>
                                            <th>Próximas dos Etapas</th>
                                            <th>Totla</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pages/ot/etapas_ot.php">Teñido</a>      
                                            </td>
                                            <td>
                                                1.537 - 0,0
                                            </td>
                                            <td>
                                                4.946 - 6,6
                                            </td>
                                            <td>
                                                6.483
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <a href="pages/ot/etapas_ot.php"> Blancos y Lavados     </a> 
                                            </td>
                                            <td>
                                                3.068 - 2,9
                                            </td>
                                            <td>
                                                3.005 - 11,7
                                            </td>
                                            <td>
                                                6.073
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pages/ot/etapas_ot.php">Secador</a> 
                                            </td>
                                            <td>
                                                2.472 - 0,2
                                            </td>
                                            <td>
                                                1.446 - 0,3
                                            </td>
                                            <td>
                                                3.918
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pages/ot/etapas_ot.php">Decatizado </a> 
                                            </td>
                                            <td>
                                                3.376 - 2,7
                                            </td>
                                            <td>
                                                3.936 - 0,3
                                            </td>
                                            <td>
                                                7.313
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pages/ot/etapas_ot.php">Cardado</a>
                                            </td>
                                            <td>
                                               491 - 0,0
                                            </td>
                                            <td>
                                                422 - 0,0
                                            </td>
                                            <td>
                                                913
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pages/ot/etapas_ot.php">Rama</a>   
                                            </td>
                                            <td>
                                               1.269 - 0,0
                                            </td>
                                            <td>
                                                3.219 - 9,0
                                            </td>
                                            <td>
                                                4.488
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </aside>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

        <!--fancyapp-->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    </body>
</html>