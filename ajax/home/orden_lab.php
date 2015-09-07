                        <div class="col-md-12">
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Órdenes Laboratorio</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Orden</th>
                                            <th>Fecha</th>
                                            <th>Cliente</th>
                                            <th>Química</th>
                                            <th>Colores</th>
                                            <th>Llegó</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="ord_lab" href="pages/laboratorio/orden_laboratorio.php">
                                                    1140
                                                </a>
                                            </td>
                                            <td>05-01-2015</td>
                                            <td>ERM</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Uva</p>
                                                <p>Piedra</p>
                                                <p>Pistacho</p>
                                                <p>Tabaco</p>
                                                <p>Menta</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_ok fa fa-check fa-2x"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="ord_lab" href="pages/laboratorio/orden_laboratorio.php">1174</a></td>
                                            <td>24-02-2015</td>
                                            <td>RHM</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Gris</p>
                                                <p>Gris</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_no fa fa-times fa-2x"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="ord_lab" href="pages/laboratorio/orden_laboratorio.php">1175</a></td>
                                            <td>26-02-2015</td>
                                            <td>FUL</td>
                                            <td>Clariant</td>
                                            <td>
                                                <p>Botella</p>
                                                <p>Burdeo</p>
                                            </td>
                                            <td>
                                                <div class="orden_lab_ok fa fa-check fa-2x"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-footer index_footer_lab">
                                    <a href="pages/laboratorio/lista_orden_lab.php">Pendientes</a>
                                    <a href="pages/laboratorio/historico_orden_lab.php">Histórica</a>
                                    <a href="pages/laboratorio/orden_laboratorio.php">Nueva</a>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            //REPARAR (NO ABRE)
                            $(function(){
                                $('.ord_lab').fancybox({
                                    href : '../pages/laboratorio/orden_laboratorio.php',
                                    type : 'iframe',
                                    padding : 0
                                });
                            });
                        </script>