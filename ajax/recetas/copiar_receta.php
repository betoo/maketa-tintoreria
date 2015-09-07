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
                                <button class="agregar_componente btn btn-success btn-right btn-margin" >Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
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