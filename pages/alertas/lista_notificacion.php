<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Notificación
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
                                    <form id="add_bodega" action="notificacion.php">
                                        <button class="pull-feft btn btn-success btn-margin">Nueva notificación</button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Asunto</th>
                                                <th>Categoria</th>
                                                <th>Prioridad</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Maquina Con desperfecto
                                                    </a>
                                                </td>
                                                <td>
                                                    Producción
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_media">
                                                        Media
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Cliente Feliz  :)
                                                    </a>
                                                </td>
                                                <td>
                                                    Cliente
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_baja">
                                                        Baja
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Comprar detergente
                                                    </a>
                                                </td>
                                                <td>
                                                    Compras
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_baja">
                                                        Baja
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Maquina Con desperfecto
                                                    </a>
                                                </td>
                                                <td>
                                                    Producción
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_alta">
                                                        Alta
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Cliente triste  :(
                                                    </a>
                                                </td>
                                                <td>
                                                    Cliente
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_alta">
                                                        Alta
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <a href="notificacion.php">
                                                        Comprar detergente
                                                    </a>
                                                </td>
                                                <td>
                                                    Compras
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_media">
                                                        Media
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_notificacion.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="notificacion.php"></a>
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
                /*
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });*/

            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>