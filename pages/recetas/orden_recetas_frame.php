<?php
    require '../../re-use/head_frame.php';
?>
                <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Orden laboratorio</h3>
                            </div>
                            <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input disabled type="text" class=" form-control" placeholder="Cliente"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Material </label>
                                            <input disabled type="text" class="form-control" placeholder="Material"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tela</label>
                                            <input disabled type="text" class=" form-control" placeholder="Tela"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Mezcla</label>
                                            <input disabled type="text" class=" form-control" placeholder="Mezcla"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quimica</label><!--laboratorio-->
                                            <input disabled type="text" class=" form-control" placeholder="Quimica"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input disabled type="text" class=" form-control" placeholder="Fecha"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input disabled type="text" class=" form-control" placeholder="Color"/>
                                            <ul id="lista_colores"></ul>
                                            <!--a class="btn-right"href="" onclick="agregar(); return false;">Agregar</a-->
                                            <div class="clear"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Laboratorio</label>
                                            <select class="form-control">
                                                <option>Lab 1</option>
                                                <option>Lab 2</option>
                                                <option>Lab 3</option>
                                            </select>
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
                            <div class="box box-warning ">
                                <div class="box-header">
                                    <h3 class="box-title">Receta</h3>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <form role="form">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="text" class="fecha form-control" placeholder="Ingrese el Fecha"/>
                                            </div>
                                        </form>
                                        <div class="form-group">
                                            <label>Química </label>
                                            <input type="text" class="form-control" placeholder="Ingrese el Quimica"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" placeholder="Ingrese el Color"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Referencia</label>
                                            <input type="text" class="form-control" placeholder="Ingrese el Referencia"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 lista_componentes">
                                        <label>Mezcla</label>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cantidad">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class=" form-control" placeholder="Componente"/>
                                            </div>
                                            <ul id="lista_mezcla"></ul>
                                            <a class="btn-right" href="" onclick="agregar_mezcla_recetas(); return false;">Agregar</a>
                                            <br>
                                        </div>
                                        <br>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Observación</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div id="tbl_agregar_pieza_guia"></div>
                        <form action="../laboratorio/lista_orden_lab.php" role="form">
                            <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Ingresado');">Agregar</button>
                            <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                        </form>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>

        