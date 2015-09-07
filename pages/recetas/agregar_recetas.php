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
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Recetas</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Etapas </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <form role="form form-buscar" id="form_buscar_receta">
                                <div class="col-md-5 col-md-offset-3">
                                    <label></label>
                                    <div class="form-group">
                                        <select class="cmb_recetas form-control">
                                            <option value="1">ABRIR 1 </option>
                                            <option value="1">ABRIR 2 </option>
                                            <option value="1">ABRIR BLANCO </option>
                                            <option value="1">ABRIR CARDA </option>
                                            <option value="1">BLANQUEAR </option>
                                            <option value="1">CARDA BLANCO </option>
                                            <option value="1">CARDADO </option>
                                            <option value="1">CENTRIFUGA BCO </option>
                                            <option value="1">CENTRIFUGADO </option>
                                            <option value="1">DECATIZADO </option>
                                            <option value="1">DECATIZADO BCO </option>
                                            <option value="1">DESCRUDE </option>
                                            <option value="1">DOBLADO </option>
                                            <option value="1">DOBLADO BLANCO </option>
                                            <option value="1">FOULAR </option>
                                            <option value="1">GASEADO </option>
                                            <option value="1">LAVADO </option>
                                            <option value="M">MANTENCION </option>
                                            <option value="A">MARCAR TELA </option>
                                            <option value="1">PREP BLANCO </option>
                                            <option value="1">PREP SECADO </option>
                                            <option value="1">PREP SECADOR </option>
                                            <option value="1">PREPARACION </option>
                                            <option value="1">RAMA BCO </option>
                                            <option value="1">RAMA BLANCO </option>
                                            <option value="1">RAMA PLEG </option>
                                            <option value="1">RAMA PLEG </option>
                                            <option value="1">RAMA PLEGADO </option>
                                            <option value="1">RAMA PLEGADO </option>
                                            <option value="1">RAMA POLIN </option>
                                            <option value="1">RAMA POLIN 2 </option>
                                            <option value="1">RAMA POLIN </option>
                                            <option value="1">RAMA RAQUELADO </option>
                                            <option value="1">RAMA SECADO </option>
                                            <option value="1">RAQUELADO </option>
                                            <option value="1">SECADO </option>
                                            <option value="1">SECADO BLANCO </option>
                                            <option value="T">TEÑIDO </option>
                                            <option value="1">VAPORIZADO </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!--/div-->
                <div id="box_maquinaria_etapa"></div>
                <button class="btn btn-success btn-right btn-margin btn-lg" >Agregar Receta</button>
                <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>