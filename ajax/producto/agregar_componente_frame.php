<?php
    require '../../re-use/head_frame.php';
?>
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title">Auxiliar</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body ">
                                <div class="form-group">
                                    <label>Proporción</label>
                                    <input type="text" class="form-control" placeholder="Proporción"/>
                                </div>
                                <div class="form-group">
                                    <label>Incidencia</label>
                                    <input type="text" class="form-control" placeholder="Incidencia"/>
                                </div>
                                <div class="form-group">
                                    <label>Producto</label>
                                    <input type="text" class="form-control" placeholder="Producto"/>
                                </div>
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control" placeholder="Cantidad"/>
                                </div>
                                <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro Agregado');cerrar_lightbox();">Agregar</button>
                                <div class="clear"></div>
                            </div>
                        </div>


<?php
    require '../../re-use/footer.php';
?>