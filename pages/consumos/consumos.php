<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Consumos
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Modificar Etapa</li>
                    </ol-->
                </section>
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Consumos</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <select class="cmb_consumos form-control">
                                            <option value="1">Ingresar Consumos</option>
                                            <option value="2">Carga de Estanques </option>
                                            <option value="3">Consultar Consumos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_consumos"></div>
                </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>
