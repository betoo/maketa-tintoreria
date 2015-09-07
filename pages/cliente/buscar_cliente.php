<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Cliente
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Buscar Cliente </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <form role="form form-buscar" id="form_buscar_cliente">
                                <!-- text input -->
                                <div class="col-md-5 col-md-offset-3">
                                    <label></label>
                                    <input type="text" class="form-control" id="search_cliente" placeholder="nombre o codigo de cliente"/>
                                    <button class="btn-right btn btn-primary btn-margin" >Guardar</button>
                                </div>
                                <div class="clear"></div>
                            </form>
                            <!--Tabla buscar cliente-->
                        </div><!-- /.box-body -->
                    </div>
                    <div id="search"></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
