                <div class="col-md-12">
                    <div class="box box-warning cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Cliente</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Cliente</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Codigo"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Guia Cliente </label>
                                        <input type="text" class="form-control" placeholder="Ingrese el guia cliente"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha Guia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese fecha guia"/>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el color"/>
                                </div>                                
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-success cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Datos Especificos</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form" id="form_agregar_pieza_guia">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Ruta</label>
                                        <input type="text" class="form-control" placeholder="Ingrese Ruta"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Receta</label>
                                        <input type="text" class="form-control" placeholder="Ingrese Receta"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Maquina</label>
                                        <input type="text" class="form-control" placeholder="Ingrese Maquina"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Lote</label>
                                        <input type="text" class="form-control" placeholder="Ingrese Lote"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tejido</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Tejido"/>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el Titulo"/>
                                </div>
                                <div class="form-group">
                                    <label>Punto</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el Punto"/>
                                </div>
                                <div class="form-group">
                                    <label>Etapa</label>
                                    <select class="form-control">
                                        <option>Teñido</option>
                                        <option>Blanco</option>
                                        <option>Lavado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label>Tipo de Entrega</label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label class="">
                                            <input type="radio" name="optionsRadios" id="" value="option1" checked="">
                                            Rollo
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label class="">
                                            <input type="radio" name="optionsRadios" id="" value="option1" checked="">
                                            Plegado
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label class="">
                                            <input type="radio" name="optionsRadios" id="" value="option1" checked="">
                                            Polin
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label class="">
                                            <input type="radio" name="optionsRadios" id="" value="option1" checked="">
                                            Doblado
                                        </label>
                                    </div>
                                    <div class="clear"></div>
                                    <button class="btn-right btn-margin btn btn-primary" >Agregar Pieza</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                        </div>
                        <div class="piezas">
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Detalle de Piezas</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>N° Pieza</th>
                                            <th>Fibra</th>
                                            <th>Proporcion 1</th>
                                            <th>Proporcion 2</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>70</td>
                                            <td>30</td>
                                            <td>                                           
                                                <button class="btn btn-danger" >Eliminar</button>                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>70</td>
                                            <td>30</td>
                                            <td>                                           
                                                <button class="btn btn-danger" >Eliminar</button>                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>70</td>
                                            <td>30</td>
                                            <td>                                           
                                                <button class="btn btn-danger" >Eliminar</button>                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                             </div>
                        </div>
                        <div class="clear"></div>
                        <button class="btn btn-success btn-right btn-margin btn-lg" >Modificar</button>
                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Eliminar</button>




