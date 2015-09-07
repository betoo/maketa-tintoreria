<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Recetas
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Recetas</li>
                    </ol-->
                </section>
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title">Detalle Recetas</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Laboratorio</label>
                                        <select class="form-control">
                                            <option>Lab 1</option>
                                            <option>Lab 2</option>
                                            <option>Lab 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="text" class="fecha form-control" placeholder=" Fecha"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tela </label>
                                        <input type="text" class="form-control" placeholder=" Tela"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mezcla </label>
                                        <input type="text" class="form-control" placeholder=" Mezcla"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cliente </label>
                                    <input type="text" class="form-control" placeholder=" cliente"/>
                                </div>
                                <div class="form-group">
                                    <label>Química </label>
                                    <input type="text" class="form-control" placeholder=" Química"/>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" placeholder=" Color"/>
                                </div>
                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" placeholder=" Referencia"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Observacion</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title">Detergente</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Producto</th>
                                            <th>Proporción</th>
                                            <th>Incidencia</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PALADWS </td>
                                            <td>1.0000</td>
                                            <td>5</td>
                                            <td><a class="producto_receta  " href="">Labotan DWS</a></td>
                                            <td>1.0600</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_recetas.php"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PQAA </td>
                                            <td>0.5000</td>
                                            <td>5</td>
                                            <td><a class="producto_receta" href="">Acido Acetico ph-45</a></td>
                                            <td>1.0600</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_recetas.php"></a>
                                            </td>
                                        </tr>
                                    </tbody> 
                                </table>
                                <button class="agregar_componente btn btn-success btn-right btn-margin " >Agregar</button>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title">Fórmula</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Producto</th>
                                            <th>Proporción</th>
                                            <th>Incidencia</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DFAMRDE</td>
                                            <td>0.1200</td>
                                            <td>2</td>
                                            <td><a class="producto_receta" href="">Foron Amarillo .BTE RDE</a></td>
                                            <td>0.28248</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_recetas.php"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DFRORDE</td>
                                            <td>0.12000</td>
                                            <td>Foron rojo rde</td>
                                            <td><a class="producto_receta" href="">Labotan DWS</a></td>
                                            <td>1.0600</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_recetas.php"></a>
                                            </td>
                                        </tr>
                                    </tbody> 
                                </table>
                                <button class="agregar_componente btn btn-success btn-right btn-margin" >Agregar</button>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title">Auxiliar</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Producto</th>
                                            <th>Proporción</th>
                                            <th>Incidencia</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PQSCP</td>
                                            <td>1.0000</td>
                                            <td>5</td>
                                            <td><a class="producto_receta" href="">Soda caustica perla</a></td>
                                            <td>0.28248</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_recetas.php"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PAVBRB</td>
                                            <td>2.00000</td>
                                            <td>5</td>
                                            <td><a class="producto_receta" href="">V-brite 500 p</a></td>
                                            <td>2.1200</td>
                                            <td>
                                                <a class="glyphicon glyphicon-remove eliminar_prd" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                <a class="glyphicon glyphicon-pencil modificar_prd" href=""></a>
                                            </td>
                                        </tr>
                                    </tbody> 
                                </table>
                                <button class="agregar_componente btn btn-success btn-right btn-margin" >Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-right btn-margin btn-lg" >Modificar</button>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>
 <script type="text/javascript">
    $(function() {
        /*
        $("#example1").dataTable({
            "bAutoWidth": true,
            "bPaginate": false,
        });
*/
        //lightBox
        $(".producto_receta").fancybox({
            href : '../../ajax/producto/agregar_prd.php',
            type : 'iframe',
            padding : 0
        });
        $(".agregar_componente").fancybox({
            href : '../../ajax/producto/agregar_componente_frame.php',
            type : 'iframe',
            padding : 0
        });

        $(".modificar_prd").fancybox({
            href : '../../ajax/producto/modificar_componente_frame.php',
            type : 'iframe',
            padding : 0
        });
    });
</script>
          