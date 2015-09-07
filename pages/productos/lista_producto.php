<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Productos
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Guia</li>
                    </ol>
                </section>
                <section class="content productos">
                    <div class="piezas col-md-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <!--h3 class="box-title"></h3-->
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <form id="add_prd" action="agregar_producto.php">
                                        <button class="pull-feft btn btn-success btn-margin">Nuevo Producto </button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Disponibilidad</th>
                                                <th>Precio</th>
                                                <th>Categoria</th>
                                                <th>Fecha ultima compra</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Palar3c
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>7000 KG</td>
                                                <td>Quimico</td>
                                                <td>12-03-2015</td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Siamsf2rl
                                                    </a>
                                                </td>
                                                <td><label class="prd_agotado">Agotado</label></td>
                                                <td>1000 KG</td>
                                                <td>Colorante</td>
                                                <td>02-03-2014</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        PQSCP
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>7000 KG</td>
                                                <td>Quimico</td>
                                                <td>01-11-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Pqaa
                                                    </a>
                                                </td>
                                                <td><label class="prd_agotado">Agotado</label></td>
                                                <td>15000 KG</td>
                                                <td>Colorante</td>
                                                <td>12-03-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        PALWD
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>2000 KG</td>
                                                <td>Colorante</td>
                                                <td>08-05-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Palar3c
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>7000 KG</td>
                                                <td>Quimico</td>
                                                <td>12-03-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Siamsf2rl
                                                    </a>
                                                </td>
                                                <td><label class="prd_agotado">Agotado</label></td>
                                                <td>1000 KG</td>
                                                <td>Colorante</td>
                                                <td>02-03-2014</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        PQSCP
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>7000 KG</td>
                                                <td>Quimico</td>
                                                <td>01-11-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        Pqaa
                                                    </a>
                                                </td>
                                                <td><label class="prd_agotado">Agotado</label></td>
                                                <td>15000 KG</td>
                                                <td>Colorante</td>
                                                <td>12-03-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="modificar_prd.php">
                                                        PALWD
                                                    </a>
                                                </td>
                                                <td><label class="prd_stock">En Stock</label></td>
                                                <td>2000 KG</td>
                                                <td>Colorante</td>
                                                <td>08-05-2015</td>
                                                <td>
                                                      <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
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