<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Reportes
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Agregar Recetas</li>
                    </ol-->
                </section>

               <section>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- AREA CHART -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Producción</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="list_reportes">
                                            <ul>
                                                <li>
                                                    <a href="kilos_cliente.php">Reporte de ingreso de tela</a>
                                                </li>
                                                <li>
                                                    <a href="kilos_cliente.php">Ingreso de Telas</a>
                                                </li>
                                                <li>
                                                    <a href="detalle_guias.php">Detalle por Guias</a>
                                                </li>
                                                <li>
                                                    <a href="">Consumos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- DONUT CHART -->
                                <div class="box box-danger">
                                    <div class="box-header">
                                        <h3 class="box-title">Bodega</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="list_reportes">
                                            <ul>
                                                <li>
                                                    <a href="">Reporte 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 3</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title">Cliente</h3>
                                    </div>
                                    <div class="box-body">
                                         <div class="list_reportes">
                                            <ul>
                                                <li>
                                                    <a href="">Guias Cliente</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 3</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="box box-success">
                                    <div class="box-header">
                                        <h3 class="box-title"></h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="list_reportes">
                                            <ul>
                                                <li>
                                                    <a href="">Reporte 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 3</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
               </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>