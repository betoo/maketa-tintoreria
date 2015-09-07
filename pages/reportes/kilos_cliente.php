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
                                        <h3 class="box-title">Reporte de Ingresos de kilos por cliente</h3>
                                    </div>
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Últimas 4 semanas</th>
                                                <th>Esta Semana</th>
                                                <th>23-02-2015 al 01-03-2015</th>
                                                <th>23-02-2015 al 01-03-2015</th>
                                                <th>16-02-2015 al 23-03-2015</th>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>54,724</td>
                                                <td>2,657</td>
                                                <td>16,274</td>
                                                <td>18,043</td>
                                                <td>17,751</td>
                                            </tr>
                                            <tr>
                                                <td>AY</td>
                                                <td>10,682</td>
                                                <td>0</td>
                                                <td>2,288</td>
                                                <td>4,612</td>
                                                <td>3,782</td>
                                            </tr>
                                            <tr>
                                                <td>57</td>
                                                <td>7,413</td>
                                                <td></td>
                                                <td>3,017</td>
                                                <td>2,353</td>
                                                <td>2,042</td>
                                            </tr>
                                            <tr>
                                                <td>AY</td>
                                                <td>10,682</td>
                                                <td>0</td>
                                                <td>2,288</td>
                                                <td>4,612</td>
                                                <td>3,782</td>
                                            </tr>
                                            <tr>
                                                <td>57</td>
                                                <td>7,413</td>
                                                <td></td>
                                                <td>3,017</td>
                                                <td>2,353</td>
                                                <td>2,042</td>
                                            </tr>
                                            <tr>
                                                <td>AY</td>
                                                <td>10,682</td>
                                                <td>0</td>
                                                <td>2,288</td>
                                                <td>4,612</td>
                                                <td>3,782</td>
                                            </tr>
                                            <tr>
                                                <td>57</td>
                                                <td>7,413</td>
                                                <td></td>
                                                <td>3,017</td>
                                                <td>2,353</td>
                                                <td>2,042</td>
                                            </tr>
                                        </table> 
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
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable({
            "bAutoWidth": true,
            "bPaginate": false,
        });
    });
</script>

