<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Cliente
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
                                    <form id="add_bodega" action="agregar_cliente.php">
                                        <button class="pull-left btn btn-success btn-margin">Nuevo Cliente</button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>Razón Social</th>
                                                <th>Encargados</th>
                                                <th>ver</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    Accor
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Juan Perez
                                                </td>
                                                <td>    
                                                    <a class="" href="modificar_cliente.php">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_cliente.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    Accor
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Pedro
                                                </td>
                                                <td>    
                                                    <a class="" href="modificar_cliente.php">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_cliente.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    Accor
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Alonso
                                                </td>
                                                <td>    
                                                    <a class="" href="modificar_cliente.php">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_cliente.php"></a>
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