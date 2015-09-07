<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Provedor
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
                                <!--h3 class="box-title"></h3-->
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <form id="add_bodega" action="agregar_proveedor.php">
                                        <button class="pull-feft btn btn-success btn-margin">Nuevo Proveedor </button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Rut</th>
                                                <th>Razon Social</th>
                                                <th>Encargado</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="modificar_proveedor.php">
                                                        proveedor 1
                                                    </a>
                                                </td>
                                                <td>
                                                    <label>11.111.111-1</label>
                                                </td>
                                                <td>
                                                    donde pepe ldta
                                                </td>
                                                <td>
                                                    <label>Don Pepe</label>
                                                </td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_proveedor.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_proveedor.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_proveedor.php">
                                                        proveedor 2
                                                    </a>
                                                </td>
                                                <td>
                                                    <label>11.111.111-1</label>
                                                </td>
                                                <td>
                                                    donde jose ldta
                                                </td>
                                                <td>
                                                    <label>Don José</label>
                                                </td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_proveedor.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_proveedor.php"></a>
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