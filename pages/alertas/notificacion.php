<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Notificaciones
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Bodega</li>
                    </ol-->
                </section>
                <section class="content productos">
                    <div class="piezas col-md-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <!--h3 class="box-title"></h3-->
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Categoria</label>
                                                <select class="form-control">
                                                    <option>Produccion</option>
                                                    <option>Compras</option>
                                                    <option>Cliente</option>
                                                    <option>Bodega</option>
                                                    <option>Otro</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Prioridad</label>
                                                <select class="form-control">
                                                    <option>Alta</option>
                                                    <option>Media</option>
                                                    <option>Baja</option>
                                                </select>
                                            </div>                                             
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Asunto</label>
                                                <input type="text" class="form-control" placeholder=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Notificación</label>
                                            <form>
                                                <textarea class="textarea" placeholder="Texto" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </form>
                                        </div>
                                        <div class="col-md-12 check_solucion" >
                                            <div class="checkbox ">
                                                <label class="check_solucion">
                                                    <input type="checkbox">Solución
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text_solucion" >
                                            <label>Solución</label>
                                            <form>
                                                <textarea class="textarea" placeholder="Texto" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </form>
                                        </div>
                                        <div class="col-md-12">
                                            <form id="" action="lista_notificacion.php">
                                                <button class="pull-left btn btn-danger btn-margin">Descartar</button> 
                                                <button class="pull-right btn btn-success btn-margin">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
        <script type="text/javascript">
            $(function() {
                /*
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });*/

            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>