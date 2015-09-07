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
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title">Guias Despachos</h3>
                                    </div>
                                    <div class="rango_fechas_monto_desp col-md-12">
                                        <div class="row">
                                            <form method="post" id="form_monto_despachos">
                                                <div class="col-md-6">
                                                    <label>Desde</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Hasta</label>
                                                </div>
                                                <div class="reporte_desde col-md-6">
                                                    <div class="col-md-4">
                                                        <label>Día</label>
                                                       <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                   </div>
                                                    <div class="col-md-4">
                                                        <label>Mes</label>
                                                        <select class="form-control">
                                                            <label>Mes</label>
                                                            <option>Enero</option>
                                                            <option>Febrero</option>
                                                            <option>Marzo</option>
                                                            <option>Abril</option>
                                                            <option>Junio</option>
                                                            <option>Julio</option>
                                                        </select>
                                                   </div>
                                                   <div class="col-md-4">
                                                        <label>Año</label>
                                                       <select class="form-control">
                                                            <option>2001</option>
                                                            <option>2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="reporte_hasta col-md-6">
                                                    <div class="col-md-4">
                                                        <label>Día</label>
                                                       <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                   </div>
                                                    <div class="col-md-4">
                                                        <label>Mes</label>
                                                        <select class="form-control">
                                                            <label>Mes</label>
                                                            <option>Enero</option>
                                                            <option>Febrero</option>
                                                            <option>Marzo</option>
                                                            <option>Abril</option>
                                                            <option>Junio</option>
                                                            <option>Julio</option>
                                                        </select>
                                                   </div>
                                                   <div class="col-md-4">
                                                        <label>Año</label>
                                                       <select class="form-control">
                                                            <option>2001</option>
                                                            <option>2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="pull-right btn btn-success btn-margin">Buscar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="content_reporte"></div>
                            </div>
                        </div>
                    </div>
               </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable({
            "bAutoWidth": true,
            "bPaginate": false,
        });
    });
</script>

