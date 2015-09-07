<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Historico Orden Laboratorio
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"></a></li>
                        <li class="active"></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <!--h3 class="box-title">Recetas Pendientes</h3-->
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Lote</th>
                                                <th>Cliente</th>
                                                <th>Laboratorio</th>
                                                <th>Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>99591</td>
                                                <td>LLA</td>
                                                <td>Laboratorio 1</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>ACC</td>
                                                <td>Laboratorio 2</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>CAI</td>
                                                <td>Laboratorio 3</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>LLA</td>
                                                <td>Laboratorio 4</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>ACC</td>
                                                <td>Laboratorio 5</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>CAI</td>
                                                <td>Laboratorio 6</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>LLA</td>
                                                <td>Laboratorio 7</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>ACC</td>
                                                <td>Laboratorio 8</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>CAI</td>
                                                <td>Laboratorio 9</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>LLA</td>
                                                <td>Laboratorio 10</td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>ACC</td>
                                                <td>Laboratorio </td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>CAI</td>
                                                <td>Laboratorio </td>
                                                <td><a class="detalle_ot" href="../recetas/orden_recetas.php">Ver </a></td>
                                            </tr>
                                        </tbody>
                                        <!--tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot-->
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                      
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/jquery/jquery-2.1.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });
                //lightBox
                /*$(".detalle_ot").fancybox({
                    href : '../../ajax/ot/detalle_ot_frame.php',
                    type : 'iframe',
                    padding : 0
                });*/

            });
        </script>

<?php
    require('../../re-use/footer.php');
?>