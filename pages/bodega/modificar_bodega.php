<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Bodega
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Personal</li>
                    </ol-->
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Modificar Bodega</h3>
                        </div>
                        <div class="box-body">
                            <form role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre Bodega</label>
                                        <input type="text" class="form-control" placeholder="Nombre Bodega"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Encargado</label>
                                        <select class="form-control">
                                            <option>José</option>
                                            <option>Pepe</option>
                                            <option>Alfredo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div id="tbl_agregar_pieza_guia"></div>
                <form mathod="POST" action="lista_bodega.php">
                    <button class="btn btn-primary btn-right btn-margin btn-lg" onclick="confirm('¿desea modificar el registro?');">Modificar</button>
                    <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>