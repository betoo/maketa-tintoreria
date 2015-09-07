<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Guia de Entrada
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Guia</li>
                    </ol-->
                </section>
                <section class="content">
                <div class="">
                    <!--form role="form"  action="../ot/agregar_ot.php"-->
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Cliente</h3>
                            </div>
                            <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="text" class="form-control" placeholder=" Codigo"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Guia Cliente </label>
                                            <input type="text" class="form-control" placeholder=" guia cliente"/>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                            <div class="box box-success cliente-box">
                                <div class="box-header">
                                    <h3 class="box-title">Datos Especificos</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form"  id="form_agregar_pieza_guia" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tejido</label>
                                                <input type="text" class="form-control" placeholder=" Tejido"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Fibra</label>
                                                <input type="text" class="form-control" placeholder="Fibra"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Receta</label>
                                                <input type="text" class="input_receta form-control" placeholder="Receta"/>
                                            </div>  
                                            <div class="checkbox guia_orden_lab  pull-right">
                                                <label>
                                                    <input id="check_lab" name="check_lab" type="checkbox"> Orden Laboratorio
                                                </label>
                                            </div> 
                                            <div class="checkbox muestra_receta pull-right">
                                                <label>
                                                    <input  type="checkbox" > No Aplica
                                                </label>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="form-group">
                                                <label>Lote</label>
                                                <input type="text" class="form-control" placeholder="Lote"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Punto</label>
                                                <input type="text" class="form-control" placeholder=" Punto"/>
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>Titulo</label>
                                            <input type="text" class="form-control" placeholder="Titulo"/>
                                        </div>
                                        <div class="form-group ruta_guia">
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
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <div class="form-group ruta_guia">
                                            <div>
                                                <label>Ruta</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label class="">
                                                    <input type="radio" name="ruta" id="" value="option1" >
                                                    Ruta 1
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label class="">
                                                    <input type="radio" name="ruta" id="" value="option1" >
                                                    Ruta 2
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label class="">
                                                    <input type="radio" name="ruta" id="" value="option1" >
                                                    Ruta 3
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label class="">
                                                    <input type="radio" name="ruta" id="" value="option1" >
                                                    Ruta 4
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group ancho_terminacion">
                                            <label>Ancho de Terminación</label>
                                            <input type="text" class=" form-control" placeholder="Ancho de Terminación"/>
                                        </div>
                                        <div class="checkbox terminacion_receta pull-right">
                                            <label>
                                                <input  type="checkbox"> Consultar Terminación
                                            </label>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group">
                                            <label>Kilos</label>
                                            <input type="text" class="form-control" placeholder="Kilos"/>
                                        </div>
                                        <div class="clear"></div>
                                        <button class="btn-right btn-margin btn btn-primary btn-" >Agregar Pieza</button>
                                        </form>
                                        </div>
                                        <div class="clear"></div>
                                    </div>  
                                </div>
                                <div class="clear"></div>
                            </div>

                            

                            <form role="form" id="form_agregar_guia"  action="../guia/crear_ot.php">
                                <div id="tbl_agregar_pieza_guia"></div>
                                <button class="btn btn-success btn-right btn-margin btn-lg" >Ingresar Guia</button>
                                <!--button class="btn btn-warning btn-right btn-margin btn-lg" >Crear Orden De Trabajo</button-->
                            </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
