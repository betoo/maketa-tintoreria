<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Orden de Trabajo
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Orden de Trabajo</li>
                    </ol>
                </section>
                <section class="content">
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
                    </div>
                    <div class="col-md-12">
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
                                <h3 class="box-title">Datos Específicos</h3>
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
                                    <div class="form-group">
                                        <label>Compromiso</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Receta</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Laboratorio</label>
                                            <input type="text" class="form-control" placeholder="Laboratotio"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tela </label>
                                            <input type="text" class="form-control" placeholder="Tela"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Mezcla </label>
                                            <input type="text" class="form-control" placeholder="Mezcla"/>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="form-control" placeholder="Color"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Referencia</label>
                                        <input type="text" class="form-control" placeholder="Referencia"/>
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
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Etapas</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Etapa Actual</label>
                                            <input type="text" class="form-control" placeholder=" Codigo" value="DECANTIZADO" />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Maquinaria</label>
                                        <input type="text" class="form-control" placeholder="Rut" value="JET HT FONGS" />
                                    </div>
                                </div>
                                
                                <div class="box-body table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Etapa</th>
                                            <th>Articulo</th>
                                            <th>Color</th>
                                            <th>N° Piezas</th>
                                            <th>Kilos</th>
                                            <th>Operador</th>
                                            <th>Receta</th>
                                            <th>Observaciones</th>
                                        </tr>
                                        <tr>
                                            <td>Marcar Tela</td>
                                            <td>TREVIRA</td>
                                            <td>DAMASCO 15143</td>
                                            <td>8</td>
                                            <td>50</td>
                                            <td>DANIEL FERNANDO GONZALEZ URRA</td>
                                            <td><a class="ver_receta" href="">Ver Receta</a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Marcar Tela</td>
                                            <td>Polygamu</td>
                                            <td>DAMASCO 15143</td>
                                            <td>8</td>
                                            <td>50</td>
                                            <td></td>
                                            <td><a class="ver_receta" href="">Ver Receta</a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Marcar Tela</td>
                                            <td>Cuellos</td>
                                            <td>DAMASCO 15143</td>
                                            <td>8</td>
                                            <td>50</td>
                                            <td></td>
                                            <td><a class="ver_receta" href="">Ver Receta</a></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <form action="ot_pendientes.php">
                            <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                            <button class="btn btn-success btn-right btn-margin btn-lg" >Crear OT</button>
                        </form>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>

 <script type="text/javascript">
    $(function() {
        //lightBox
        $(".ver_receta").fancybox({
            href : '../../ajax/ot/detalle_ot_frame.php',
            type : 'iframe',
            padding : 0
        });

    });
</script>