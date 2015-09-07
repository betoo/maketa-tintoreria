<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Maquinaria
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Buscar Maquinaria</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Buscar Maquinaria </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <form role="form form-buscar" id="form_buscar_maquinaria">
                                <!-- text input -->
                                <div class="col-md-5 col-md-offset-3">
                                    <label>Codigo Maquinaria</label>
                                    <input type="text" class="form-control" id="search_cliente" placeholder="Ingrese el Codigo de Maquinaria"/>
                                    <button class="btn-right btn btn-primary btn-margin" >Guardar</button>
                                    <!-- Agregar  Fancy-->
                                </div>
                                <div class="clear"></div>
                            </form>
                            <!--Tabla buscar cliente-->
                        </div><!-- /.box-body -->
                    </div>
                    <div id="search_maq"></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>

  