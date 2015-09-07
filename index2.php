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
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
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
                        <div class="col-lg-3 col-xs-6">
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
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
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
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
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
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Ot en Proceso</h3>
                                    <div class="box-tools pull-right">
                                    </div>
                                </div>
                                <div class="box-body  table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Cliente</th>
                                            <th>OT</th>
                                            <th>Color</th>
                                            <th>Fecha Entrega</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                Preparación        
                                            </td>
                                            <td>
                                                57
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                Marino 50
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Preparación        
                                            </td>
                                            <td>
                                                57
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                Marino 50
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Cardado        
                                            </td>
                                            <td>
                                                57
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                Negro Reac
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Teñido        
                                            </td>
                                            <td>
                                                57
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                Marino 50
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Blanquear
                                            </td>
                                            <td>
                                                AY
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                Bco Especial 50
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Decatizado BCO
                                            </td>
                                            <td>
                                                AY
                                            </td>
                                            <td>
                                                00053
                                            </td>
                                            <td>
                                                BCO MEL
                                            </td>
                                            <td>    
                                                12-03-2015
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box box-info">
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
                                                Teñido      
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
                                                Blancos y Lavados      
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
                                                Secador      
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
                                                Decatizado      
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
                                                Cardado      
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
                                                Rama      
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
                        <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Órdenes Pendientes</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Cliente</th>
                                            <th>OT</th>
                                            <th>Color</th>
                                            <th>Días Etapa</th>
                                            <th>Kilos</th>
                                        </tr>
                                        <tr>
                                            <td >
                                                <div >GASEADO</div>
                                            </td>
                                            <td >
                                                COS
                                            </td>
                                            <td>
                                                <div >
                                                    <a href="ordenes_trabajo/detalle_ot.php?ot=99419" target="_blank">99419</a>
                                                </div>
                                            </td>
                                            <td >
                                                AZUL.REY 6
                                            </td>
                                            <td >
                                                53
                                            </td>
                                            <td>
                                                275
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25">
                                                PREPARACION
                                            </td>
                                            <td height="25">
                                                ACL
                                            </td>
                                            <td>
                                                <a href="ordenes_trabajo/detalle_ot.php?ot=99559" target="_blank">99559</a>
                                            </td>
                                            <td>
                                                LAVADO
                                            </td>
                                            <td >
                                                47
                                            </td>
                                            <td>
                                                333
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25">
                                                PREPARACION
                                            </td>
                                            <td height="25">
                                                COY
                                            </td>
                                            <td>
                                                <a href="ordenes_trabajo/detalle_ot.php?ot=99609" target="_blank">99609</a>
                                            </td>
                                            <td>
                                                AZUL I 11 
                                            </td>
                                            <td >
                                                43
                                            </td>
                                            <td>
                                                73
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25">
                                                PREPARACION
                                            </td>
                                            <td height="25">
                                                SCP
                                            </td>
                                            <td>
                                                <a href="ordenes_trabajo/detalle_ot.php?ot=99699" target="_blank">99699</a>
                                            </td>
                                            <td>
                                                CE
                                            S/M</td>
                                            <td >
                                                36
                                            </td>
                                            <td>
                                                30
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25">
                                                PREPARACION
                                            </td>
                                            <td height="25">
                                                ACL
                                            </td>
                                            <td>
                                                <a href="ordenes_trabajo/detalle_ot.php?ot=99776" target="_blank">99776</a>
                                            </td>
                                            <td>
                                                TE
                                            </td>
                                            <td >
                                                30
                                            </td>
                                            <td>
                                                183
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Órdenes Laboratorio</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Orden</th>
                                            <th>Fecha</th>
                                            <th>Cliente</th>
                                            <th>Química</th>
                                            <th>Colores</th>
                                            <th>Llegó</th>
                                        </tr>
                                        <tr>
                                            <td>1140</td>
                                            <td>05-01-2015</td>
                                            <td>ERM</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Uva</p>
                                                <p>Piedra</p>
                                                <p>Pistacho</p>
                                                <p>Tabaco</p>
                                                <p>Menta</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_ok"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1174</td>
                                            <td>24-02-2015</td>
                                            <td>RHM</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Gris</p>
                                                <p>Gris</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_no"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1175</td>
                                            <td>26-02-2015</td>
                                            <td>FUL</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Botella</p>
                                                <p>Burdeo</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_ok"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer index_footer_lab">
                                    <a href="">Pendientes</a>
                                    <a href="">Histórica</a>
                                    <a href="">Nueva</a>

                                </div>
                            </div>
                        </div>
                        <!--div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Info Box</h3>
                                </div>
                                <div class="box-body">
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </div-->
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

    </body>
</html>
