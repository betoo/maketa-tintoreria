<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Personal
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Personal</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Ingreso Personal</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Nombre </label>
                                        <input type="text" class="form-control" placeholder="Ingrese el nombre"/>
                                    </div>
                                     <div class="form-group">
                                        <label>Rut</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el rut"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Maquinaria</label>
                                    <select class="form-control">
                                        <option>Maq 1</option>
                                        <option>Maq 2</option>
                                        <option>Maq 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>Cargo</label>
                                        <input type="text" class="form-control" placeholder="Cargo"/>
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
                <form action="lista_personal.php">
                    <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');">Agregar</button>
                    <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                </form>>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>