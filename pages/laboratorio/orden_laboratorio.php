<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Orden laboratorio

                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Orden Laboratorio</li>
                    </ol>
                </section>

                
                <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Crear orden laboratorio</h3>
                            </div>
                            <div class="box-body">
                                <form action="lista_orden_lab.php" role="form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="text" class=" form-control" placeholder="Cliente"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Laboratorio</label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                                <option>Archroma</option>
                                                <option>Lab 2</option>
                                                <option>Lab 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" class=" form-control" placeholder="Fecha"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class=" form-control" placeholder="Color"/>
                                            <ul id="lista_colores"></ul>
                                            <a class="btn-right"href="" onclick="agregar(); return false;">Agregar</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tela</label>
                                            <input type="text" class=" form-control" placeholder="Tela"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Mezcla</label>
                                            <input type="text" class=" form-control" placeholder="Mezcla"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Material</label>
                                            <input type="text" class=" form-control" placeholder="Material"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Quimica</label><!--laboratorio-->
                                            <input type="text" class=" form-control" placeholder="Quimica"/>
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
                        <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Ingresado');">Agregar Orden</button>
                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                    </form>
                </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>