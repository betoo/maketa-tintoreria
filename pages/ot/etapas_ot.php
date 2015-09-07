<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        OT en Proceso según etapas
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Bodega</li>
                    </ol-->
                </section>
                <section class="content productos">
                    <div class="piezas col-md-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Tintoreria</h3>
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>OT</th>
                                                <th>Cliente</th>
                                                <th>N° Piezas</th>
                                                <th>Total Kg</th>
                                                <th>Color</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="../ot/agregar_ot.php">92001</a>
                                                </td>
                                                <td>
                                                    <a href="../cliente/modificar_cliente.php">MJ</a>
                                                    
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <a href="orden_recetas.php">Rojo</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="../ot/agregar_ot.php">92003</a>
                                                </td>
                                                <td>
                                                    <a href="../cliente/modificar_cliente.php">KK</a>
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    129
                                                </td>
                                                <td>
                                                    <a href="orden_recetas.php">Verde</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="../ot/agregar_ot.php">92003</a>
                                                </td>
                                                <td>
                                                    <a href="../cliente/modificar_cliente.php">ACC</a>
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    90
                                                </td>
                                                <td>
                                                    <a href="../cliente/orden_recetas.php">Azul</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
        <script type="text/javascript">
            $(function() {
                
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });
            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>