<?php
    require '../../re-use/head_frame.php';
?>
            <aside class="right-side">
                <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning ">
                            <div class="box-header">
                                <h3 class="box-title">Receta</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" class="fecha form-control" placeholder=" Fecha"/>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                        <label>Química </label>
                                        <input type="text" class="form-control" placeholder=" Química"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                        <label>Observación</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="box_copiar_receta">
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
                                                            </td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                                
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
                                                            </td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                               
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
                                                            </td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tbl_agregar_pieza_guia"></div>
                        <form action="../laboratorio/lista_orden_lab.php" role="form">
                            <button class="btn btn-primary btn-right btn-margin btn-lg" onclick="alert('Registro Modificado'); parent.$.fancybox.close(true);">Modificar</button>
                            <button class="btn btn-danger btn-right btn-margin btn-lg" onclick="parent.$.fancybox.close(true);">Cancelar</button>
                        </form>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>

             <script type="text/javascript">
                $(function() {
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