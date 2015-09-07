<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Modificar Etapa
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Modificar Etapa</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Etapa </h3>
                        </div>
                        <div class="box-body">
                            <div class="cmb_etapas form-group">
                                <select class="etapas form-control">
                                    <option>ABRIR 1</option>
                                    <option>RAMA POLIN </option>
                                    <option>DECATIZADO</option>
                                    <option>CENTRIFUGA BCO</option>
                                    <option>RAMA BLANCO</option>
                                    <option value="T">Tintoreria</option>
                                    <option value="M">Mantención</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="tbl_etapas"></div>
                    <div id="etapa_tintoreria"></div>
                    <div id="tbl_etapas_maquina"></div>
                    <div id="btn_modificar"></div>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>
