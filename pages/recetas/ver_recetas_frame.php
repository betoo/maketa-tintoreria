<?php
    require '../../re-use/head_frame.php';
?>
            <aside class="right-side">
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title"> Recetas</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Laboratorio</label>
                                        <select class="form-control">
                                            <option>Lab 1</option>
                                            <option>Lab 2</option>
                                            <option>Lab 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="text" class="fecha form-control" placeholder="Ingrese el Fecha"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tela </label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Tela"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mezcla </label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Mezcla"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cliente </label>
                                    <input type="text" class="form-control" placeholder="Ingrese el cliente"/>
                                </div>
                                <div class="form-group">
                                    <label>Quimica </label>
                                    <input type="text" class="form-control" placeholder="Ingrese el Quimica"/>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el Color"/>
                                </div>
                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el Referencia"/>
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
                <!--/div-->
                <div id="tbl_agregar_pieza_guia"></div>
                <!--button class="btn btn-success btn-right btn-margin btn-lg" >Agregar Receta</button>
                <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button-->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>