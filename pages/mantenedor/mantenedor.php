<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Mantenedor
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Guia</li>
                    </ol>
                </section>
                <section class="content">
                <div class="col-md-12">
                        <div class="">
                            <div class="box-header">
                                <!--h3 class="box-title">Datos Especificos</h3-->
                            </div>
                            <div class="box-body">
                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Custom Tabs -->
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#moneda" data-toggle="tab">Moneda</a></li>
                                                <li><a href="#cat_prd__mantenedor" data-toggle="tab">Categoria Producto</a></li>
                                                <li><a href="#tip_gasto__mantenedor" data-toggle="tab">Tipo de Gastos</a></li>
                                                <li><a href="#etapa__mantenedor" data-toggle="tab">Etapa</a></li>
                                                <li><a href="#tipo_pago_mantenedor" data-toggle="tab">Tipo de Pago</a></li>
                                                <li><a href="#ruta" data-toggle="tab">Ruta</a></li>
                                                <!--li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li-->
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="moneda">
                                                    <form id="form_moneda_mantencion">  
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="Nombre"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Signo</label>
                                                            <input type="text" class="form-control" placeholder="Signo"/>
                                                        </div>
                                                        <div id="tbl_moneda_mantendor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tip_gasto__mantenedor">
                                                    <form id="form_t_gasto_mantencion">
                                                        <div class="form-group">
                                                            <label>Gasto</label>
                                                            <input type="text" class="form-control" placeholder="Gastos"/>
                                                        </div>
                                                        <div id="tbl_t_gasto_mantencion"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="etapa__mantenedor">
                                                    <form id="form_etapa_mantenedor">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="nombre"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Precio</label>
                                                            <input type="text" class="form-control" placeholder="Precio"/>
                                                        </div>
                                                        <div id="tbl_etapa_mantenedor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tipo_pago_mantenedor">
                                                    <form id="form_tipo_pago_mantenedor">    
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="nombre"/>
                                                        </div>
                                                        <div id="tbl_tipo_pago_mantenedor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="cat_prd__mantenedor">
                                                    <form id="cat_prd__mantenedor">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="nombre"/>
                                                            <label>Asociar categoria</label> 
                                                            <select class="form-control">
                                                                <option>Seleccione </option>
                                                                <option>Categoria 1 </option>
                                                                <option>Categoria 2</option>
                                                                <option>Categoria 3</option>

                                                            </select>
                                                        </div>
                                                        <div id="tbl_cat_prd__mantenedor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="ruta">
                                                    <form id="from_ruta">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="nombre"/>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-4">
                                                                <label>Etapas</label>
                                                                <div class="clear"></div>
                                                                <select name="origen[]" id="origen" multiple="multiple" size="8">
                                                                    <option value="2">ABRIR 2 </option>
                                                                    <option value="3">ABRIR BLANCO </option>
                                                                    <option value="4">ABRIR CARDA </option>
                                                                    <option value="5">BLANQUEAR </option>
                                                                    <option value="6">CARDA BLANCO </option>
                                                                    <option value="7">CARDADO </option>
                                                                    <option value="8">CENTRIFUGA BCO </option>
                                                                    <option value="1">RAMA POLIN </option>
                                                                    <option value="2">RAMA RAQUELADO </option>
                                                                    <option value="3">RAMA SECADO </option>
                                                                    <option value="4">RAQUELADO </option>
                                                                    <option value="5">SECADO </option>
                                                                    <option value="6">SECADO BLANCO </option>
                                                                    <option value="7">TEÑIDO </option>
                                                                    <option value="8">VAPORIZADO </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="button" class="pasar izq" value="Pasar »">
                                                                <input type="button" class="quitar der" value="« Quitar">
                                                                <!--input type="button" class="pasartodos izq" value="Todos »">
                                                                <input type="button" class="quitartodos der" value="« Todos"-->
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Nueva Ruta</label>
                                                                 <div class="clear"></div>
                                                                <select name="destino[]" id="destino" multiple="multiple" size="8">
                                                                    <option value="1">ABRIR 1 </option>
                                                                </select>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div id="tbl_cat_prd__mantenedor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--button class="btn btn-success btn-right btn-margin btn-lg"value="option1" >Ingresar Guia</button>
                            <button class="btn btn-warning btn-right btn-margin btn-lg" >Crear Orden De Trabajo</button-->
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
