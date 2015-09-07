                        <div class="box box-warning">
                            <div class="box-header">
                                <!--h3 class="box-title"></h3-->
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>Razón Social</th>
                                                <th>Encargados</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    <a class="" href="pages/cliente/modificar_cliente.php">Accor</a>
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Juan Perez
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    <a class="" href="../cliente/modificar_cliente.php">Accor</a>
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Pedro
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.111.111-1
                                                </td>
                                                <td>
                                                    <a class="" href="../cliente/modificar_cliente.php">Accor</a>
                                                </td>
                                                <td>
                                                    xxxxx
                                                </td>
                                                <td>
                                                    Alonso
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <script type="text/javascript">
                            $(function() {
                                
                                $("#example1").dataTable({
                                    "bAutoWidth": true,
                                    "bPaginate": false,
                                });
                            });
                            
                        </script>