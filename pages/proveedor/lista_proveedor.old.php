<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Proveedor
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Proveedor</a></li>
                        <li class="active">Buscar Proveedor</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Buscar Proveedor </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form form-buscar" id="form_buscar_personal">
                            <!-- text input -->
                            <div class="col-md-5 col-md-offset-3">
                                <label>Nombre</label>
                                <input type="text" class="form-control" id="search_personal" placeholder="Ingrese el nombre"/>
                                <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                            </div>
                            <div class="clear"></div>
                        </form>
                        <!--Tabla buscar cliente-->
                    </div><!-- /.box-body -->
                </div>
                <div id="tbl_buscar_personal"></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
