<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Configuración Maquinaria
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
                                <div class="box-body ">
                                    <div class="table-responsive">
                                        <form id="add_bodega" action="detalle_configuracion_maquinaria.php">
                                            <button class="pull-feft btn btn-success btn-margin">Nueva </button>
                                        </form>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Cliente</th>
                                                    <th>Maquina</th>
                                                    <th>Acción</th>
                                                    <th>Ver</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        ACC
                                                    </td>
                                                    <td>
                                                        <a href="agregar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                    <td>
                                                        <a href="detalle_configuracion_maquinaria.php">
                                                            Ver
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        57
                                                    </td>
                                                    <td>
                                                        <a href="agregar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                    <td>
                                                        <a href="detalle_configuracion_maquinaria.php">
                                                            Ver
                                                        </a>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        ILL
                                                    </td>
                                                    <td>
                                                        <a href="agregar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                    <td>
                                                        <a href="detalle_configuracion_maquinaria.php">
                                                            Ver
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--form id="new_mantencion" action="agregar_maquinaria.php">
                                        <button class="pull-right btn btn-success btn-margin">Nueva configuración</button>
                                    </form-->
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