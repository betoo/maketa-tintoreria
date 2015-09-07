<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Lista Lote
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
                                    <h3 class="box-title">Lista Lote</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Lote</th>
                                                <th>Kilos</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>99591</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Verde</a></td>
                                                <td>ACC, AY, ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Amarillo</a></td>
                                                <td>ACC, AY</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Rojo</a></td>
                                                <td>ACC,ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Naranjo</a></td>
                                                <td>ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>186</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Rojo</a></td>
                                                <td>ACC</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>187</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Azul</a></td>
                                                <td>ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Morado</a></td>
                                                <td>ACC</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>188</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Violeta</a></td>
                                                <td>AY</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>189</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Azul</a></td>
                                                <td>ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>99591</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Rojo</a></td>
                                                <td>ACC</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>184</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Rojo</a></td>
                                                <td>ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                            <tr>
                                                <td>185</td>
                                                <td>70</td>
                                                <td><a class="receta_lote" href="">Negro</a></td>
                                                <td>ILL</td>
                                                <td><a class="lista_lote" href="../../ajax/lote/frame_detalle_lote.php">Ver Lote </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
                /*
                $(".lista_lote").fancybox({
                    href : '../../ajax/lote/frame_detalle_lote.php',
                    type : 'iframe',
                    padding : 0
                });
*/
                $(".receta_lote").fancybox({
                    href : '../../ajax/recetas/receta_frame.php',
                    type : 'iframe',
                    padding : 0
                });

            });
        </script>

<?php
    require('../../re-use/footer.php');
?>