<?php
    require '../../re-use/head_frame.php';
?>
            <aside class="right-side">
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning ">
                        <div class="box-header">
                            <h3 class="box-title"> Reproceso</h3>
                        </div>
                        <div class="box-body">
                            <form role="form">
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label>Etapa</label>
                                        <input type="text" class="form-control" placeholder="Etapa" />
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad de Reprocesos</label>
                                        <input type="text" class="form-control" placeholder="Etapa" />
                                    </div> 
                                    <div class="form-group">
                                        <label>Fecha Carga</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        <textarea class="form-control"></textarea>
                                    </div>   
                                </div>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--/div-->
                <div id="tbl_agregar_pieza_guia"></div>
                <!--button class="btn btn-success btn-right btn-margin btn-lg" >Agregar Receta</button>
                <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button-->
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>