<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Lote 184
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Guia</li>
                    </ol>
                </section>
               <div class="content">
                   <div class="box box-success cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Total Lote</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Kilos</label>
                                    <input type="text" class="form-control" disabled placeholder="2098" />
                                </div>
                                <div class="form-group">
                                    <label>Total Metros</label>
                                    <input type="text" class="form-control" disabled placeholder="1500" />
                                </div>
                                <div class="form-group">
                                    <label>Cantidad Piezas</label>
                                    <input type="text" class="form-control" disabled placeholder="59" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha Carga</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" id="datemask" class="form-control" disabled data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Descarga</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" id="datemask" class="form-control" disabled data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_1" data-toggle="tab">OT 29501</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">OT 29502</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">OT 29503</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">OT 29504</a></li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
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
                                                                    <input type="text" class="form-control" placeholder=" Codigo" value="ACCOR" disabled/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rut</label>
                                                                    <input type="text" class="form-control" placeholder="Rut" value="78.206.910-1" disabled/>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Fecha</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                    <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="02-02-2015" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Guia Cliente </label>
                                                                <input type="text" class="form-control" placeholder=" guia cliente" value="076615" disabled/>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="box box-warning">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Detalle de Piezas</h3>
                                                        </div>
                                                        <div class="box-body table-responsive">
                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>N° Pieza</th>
                                                                    <th>Fibra</th>
                                                                    <th>Proporcion 1</th>
                                                                    <th>Proporcion 2</th>
                                                                    <th>Lote</th>
                                                                    <th>Etapa</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>POLIESTER</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78517</td>
                                                                    <td>Marcar Tela</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>184</td>
                                                                    <td>POLICOTTON</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78516</td>
                                                                    <td>Hacer Receta</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>185</td>
                                                                    <td>ACRILICO</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78518</td>
                                                                    <td>Preparación</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="box box-success cliente-box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Datos Especificos</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Kilos</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Total Metros</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Cantidad Piezas</label>
                                                                    <input type="text" class="form-control" placeholder="Cantidad Piezas" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Fecha Carga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Fecha Descarga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <form action="ot_pendientes.php">
                                                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" >Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
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
                                                                    <input type="text" class="form-control" placeholder=" Codigo" value="LLA" disabled/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rut</label>
                                                                    <input type="text" class="form-control" placeholder="Rut" value="78.206.910-1" disabled/>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Fecha</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                    <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="02-02-2015" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Guia Cliente </label>
                                                                <input type="text" class="form-control" placeholder=" guia cliente" value="076615" disabled/>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="box box-warning">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Detalle de Piezas</h3>
                                                        </div>
                                                        <div class="box-body table-responsive">
                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>N° Pieza</th>
                                                                    <th>Fibra</th>
                                                                    <th>Proporcion 1</th>
                                                                    <th>Proporcion 2</th>
                                                                    <th>Lote</th>
                                                                    <th>Etapa</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>POLIESTER</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78517</td>
                                                                    <td>Marcar Tela</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>184</td>
                                                                    <td>POLICOTTON</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78516</td>
                                                                    <td>Hacer Receta</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>185</td>
                                                                    <td>ACRILICO</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78518</td>
                                                                    <td>Preparación</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="box box-success cliente-box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Datos Especificos</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Kilos</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Total Metros</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Cantidad Piezas</label>
                                                                    <input type="text" class="form-control" placeholder="Cantidad Piezas" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Fecha Carga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Fecha Descarga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <form action="ot_pendientes.php">
                                                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" >Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="tab_3">
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
                                                                    <input type="text" class="form-control" placeholder=" asd" value="adasd" disabled/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rut</label>
                                                                    <input type="text" class="form-control" placeholder="Rut" value="78.206.910-1" disabled/>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Fecha</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                    <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="02-02-2015" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Guia Cliente </label>
                                                                <input type="text" class="form-control" placeholder=" guia cliente" value="076615" disabled/>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="box box-warning">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Detalle de Piezas</h3>
                                                        </div>
                                                        <div class="box-body table-responsive">
                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>N° Pieza</th>
                                                                    <th>Fibra</th>
                                                                    <th>Proporcion 1</th>
                                                                    <th>Proporcion 2</th>
                                                                    <th>Lote</th>
                                                                    <th>Etapa</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>POLIESTER</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78517</td>
                                                                    <td>Marcar Tela</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>184</td>
                                                                    <td>POLICOTTON</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78516</td>
                                                                    <td>Hacer Receta</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>185</td>
                                                                    <td>ACRILICO</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78518</td>
                                                                    <td>Preparación</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="box box-success cliente-box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Datos Especificos</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Kilos</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Total Metros</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Cantidad Piezas</label>
                                                                    <input type="text" class="form-control" placeholder="Cantidad Piezas" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Fecha Carga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Fecha Descarga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <form action="ot_pendientes.php">
                                                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" >Guardar</button>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane" id="tab_4">
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
                                                                    <input type="text" class="form-control" placeholder=" Codigo" value="LLA" disabled/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rut</label>
                                                                    <input type="text" class="form-control" placeholder="Rut" value="78.206.910-1" disabled/>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Fecha</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                    <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="02-02-2015" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Guia Cliente </label>
                                                                <input type="text" class="form-control" placeholder=" guia cliente" value="076615" disabled/>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="box box-warning">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Detalle de Piezas</h3>
                                                        </div>
                                                        <div class="box-body table-responsive">
                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>N° Pieza</th>
                                                                    <th>Fibra</th>
                                                                    <th>Proporcion 1</th>
                                                                    <th>Proporcion 2</th>
                                                                    <th>Lote</th>
                                                                    <th>Etapa</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>POLIESTER</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78517</td>
                                                                    <td>Marcar Tela</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>184</td>
                                                                    <td>POLICOTTON</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78516</td>
                                                                    <td>Hacer Receta</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>185</td>
                                                                    <td>ACRILICO</td>
                                                                    <td>70</td>
                                                                    <td>30</td>
                                                                    <td>78518</td>
                                                                    <td>Preparación</td>
                                                                    <td>                                           
                                                                        <button class="btn btn-danger" >Eliminar</button>                                                
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="box box-success cliente-box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Datos Especificos</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Kilos</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Total Metros</label>
                                                                    <input type="text" class="form-control" placeholder="total kilos" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Cantidad Piezas</label>
                                                                    <input type="text" class="form-control" placeholder="Cantidad Piezas" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Fecha Carga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Fecha Descarga</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <form action="ot_pendientes.php">
                                                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" >Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
               </div>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>


                    