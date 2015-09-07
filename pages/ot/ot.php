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
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Buscar Orden de trabajo </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <form role="form form-buscar" id="form_buscar_ot">
                                <!-- text input -->
                                <div class="col-md-5 col-md-offset-3">
                                    <label></label>
                                    <input type="text" class="form-control" id="search_ot" placeholder="codigo de Orden de trabajo"/>
                                    <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                                </div>
                                <div class="clear"></div>
                            </form>
                            <!--Tabla buscar cliente-->
                        </div><!-- /.box-body -->
                    </div>
                    <div id="tbl_ot"></div>                    
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>


