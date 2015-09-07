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
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol-->
                </section>

                <!-- Main content -->
                <section class="content">
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Modificar Cliente</h3>
                            </div>
                            <div class="box-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Rut</label>
                                        <input type="text" class="form-control" value="0795131604" placeholder="Ingrese el rut"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Razon Social</label>
                                        <input type="text" class="form-control" value="TEXTIL FUADELA LTDA." placeholder="Ingrese el Razon Social"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Encargado</label>
                                        <input type="text" class="form-control" value="FUAD CHAGUAN " placeholder="Ingrese el Encargado"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <select class="form-control">
                                            <option>Santiago</option>
                                            <option>Viña del mar</option>
                                            <option>Concepcion</option>
                                        </select>
                                    </div>
                                    <button class="btn-right btn btn-primary" >Modificar</button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
