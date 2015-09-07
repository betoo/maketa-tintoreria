<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Laboratorio
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Laboratorio</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Ingreso Laboratorio</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="fecha form-control" placeholder="Ingrese el Laboratorio"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Encargado</label>
                                            <input type="text" class="form-control" placeholder=" Encargado"/>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" class="fecha form-control" placeholder="Ingrese el Fecha"/>
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
                    <div id="tbl_agregar_pieza_guia"></div>
                    <button class="btn btn-success btn-right btn-margin btn-lg" >Agregar Laboratorio</button>
                    <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>