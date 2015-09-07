<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        OT en Proceso 
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"></a></li>
                        <li class="active"></li>
                    </ol-->
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <!--h3 class="box-title">OT </h3-->
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>OT</th>
                                                <th>Cliente</th>
                                                <th>Kilos</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">99591</a></td>
                                                <td><a class="modificar_cliente" href="">LLA</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">184</a></td>
                                                <td><a class="modificar_cliente" href="">ACC</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">185</a></td>
                                                <td><a class="modificar_cliente" href="">CAI</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">99591</a></td>
                                                <td><a class="modificar_cliente" href="">LLA</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">184</a></td>
                                                <td><a class="modificar_cliente" href="">ACC</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">185</a></td>
                                                <td><a class="modificar_cliente" href="">CAI</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">99591</a></td>
                                                <td><a class="modificar_cliente" href="">LLA</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">184</a></td>
                                                <td><a class="modificar_cliente" href="">ACC</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">185</a></td>
                                                <td><a class="modificar_cliente" href="">CAI</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">99591</a></td>
                                                <td><a class="modificar_cliente" href="">LLA</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">184</a></td>
                                                <td><a class="modificar_cliente" href="">ACC</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="detalle_ot" href="#">185</a></td>
                                                <td><a class="modificar_cliente" href="">CAI</a></td>
                                                <td>70</td>
                                                 <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                </td>
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
                $(".detalle_ot").fancybox({
                    href : '../../ajax/ot/detalle_ot_frame.php',
                    type : 'iframe',
                    padding : 0
                });
                $(".modificar_cliente").fancybox({
                    href : '../../ajax/cliente/detalle_cliente_frame.php',
                    type : 'iframe',
                    padding : 0
                });
            });
        </script>

<?php
    require('../../re-use/footer.php');
?>