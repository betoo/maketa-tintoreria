

<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Configuración Maquinaria
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Bodega</li>
                    </ol-->
                </section>
                <section class="content ">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Cliente</h3>
                                </div>
                                <div class="box-body">
                                	<div class=" col-md-6">
                            		 	<div class="form-group">
	                                        <label>Máquina</label>
	                                        <input type="text" class="form-control" placeholder="Máquina"/>
	                                    </div>
	                                </div>
	                                <div class=" col-md-6">
	                                    <div class="form-group">
	                                        <label>Tipo</label>
	                                        <select class="form-control">
	                                            <option>Eléctrico</option>
	                                            <option>Mecánico</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class=" col-md-12">
	                                	<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Observación</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                <div class="clear"></div>
                            </div>
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
                });
            */
            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>