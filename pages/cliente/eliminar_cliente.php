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
                            <form role="form form-buscar">
                                <!-- text input -->
                                <label>Codigo Cliente</label>
                                <input type="text" class="form-control" placeholder="Ingrese el Codigo de cliente"/>
                                <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                                <div class="clear"></div>
                            </form>
                            <!--Tabla buscar cliente-->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Resultados de busqueda</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Razon Social</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>Tintoreria</td>
                                            <td>
                                                <button class="btn btn-success" >Ver</button>                                                
                                                <button class="btn btn-danger" >Eliminar</button>                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
