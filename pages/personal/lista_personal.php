<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Personal
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
                                    <form id="add_bodega" action="agregar_personal.php">
                                        <button class="pull-feft btn btn-success btn-margin">Nuevo Colaborador</button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Rut</th>
                                                <th>Cargo</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="agregar_personal.php">
                                                        Roberto poblete
                                                    </a>
                                                </td>
                                                <td>
                                                    17.254.111-1
                                                </td>
                                                <td>
                                                    operador maquinaria
                                                </td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_bodega.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="agregar_personal.php">
                                                        Alfredo
                                                    </a>
                                                </td>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    operador maquinaria
                                                </td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_personal.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_personal.php"></a>
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