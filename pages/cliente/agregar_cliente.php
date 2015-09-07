<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Cliente
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol-->
                </section>

                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Datos específicos</h3>
                        </div>
                        <div class="box-body">
                            <form role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Rut</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el rut"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Codigo</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Codigo"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Razón Social</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Razón Social"/>
                                    </div>
                                     <div class="form-group">
                                        <label>Encargados</label>
                                        <input type="text" class="form-control" placeholder="Encargados"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <select class="form-control">
                                             <option>Seleccione</option>
                                            <option>Santiago</option>
                                            <option>Viña del mar</option>
                                            <option>Concepcion</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Comuna</label>
                                        <select class="form-control">
                                             <option>Seleccione</option>
                                            <option>Providencia</option>
                                            <option>Ñuñoa</option>
                                            <option>Macul</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" placeholder="Dirección"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password"/>
                                    </div>
                                    <div class="form-group">
                                        <a target="_blank" href="https://www.google.cl/maps/dir/Palacio+de+La+Moneda+-+Moneda+S%2FN,+Regi%C3%B3n+Metropolitana/Pedro+de+Valdivia+5852,+Macul,+Regi%C3%B3n+Metropolitana/@-33.4572196,-70.6483176,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x9662c5a6fd47e465:0x5d0fa12b4d88ae82!2m2!1d-70.65387!2d-33.442909!1m5!1m1!1s0x9662cfe396e3bb57:0x97b255cd171fa022!2m2!1d-70.6058648!2d-33.4775634!3e0">Ver Mapa</a>
                                    </div>
                                </div>
                            </form> 
                        <div class="clear"></div>
                        </div><!-- /.box-body -->
                    </div>
                    <!--button class="btn-right btn btn-primary" >Guardar</button-->
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Precios</h3>
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <form id="add_precio" action="">
                                        <button class="ver_precio_cli pull-left btn btn-success btn-margin">Agregar Nuevo</button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Fibra</th>
                                                <th>Codigo Color</th>
                                                <th>Color</th>
                                                <th>Precio</th>
                                                <th>ver</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Algodón
                                                </td>
                                                <td>
                                                    123
                                                </td>
                                                <td>
                                                    Verde
                                                </td>
                                                <td>
                                                    1200
                                                </td>
                                                <td>    
                                                    <a class="ver_precio_cli" href="">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_cli" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_cli" href=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Poliéster
                                                </td>
                                                <td>
                                                    234
                                                </td>
                                                <td>
                                                    Rojo
                                                </td>
                                                <td>
                                                    1000
                                                </td>
                                                <td>    
                                                    <a class="ver_precio_cli" href="">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_cli" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_cli" href=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Algodón/Poliéster
                                                </td>
                                                <td>
                                                    435
                                                </td>
                                                <td>
                                                    Amarillo
                                                </td>
                                                <td>
                                                    1100
                                                </td>
                                                <td>    
                                                    <a class="ver_precio_cli" href="">Ver</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_cli" href="" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_cli" href=""></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <button class="btn-right btn btn-lg btn-success btn-margin" >Guardar</button>
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });
                $('.modificar_cli').fancybox({
                    href : '../../ajax/cliente/precio_cliente_frame.php',
                    type : 'iframe',
                    padding : 0
                });
                $('.ver_precio_cli').fancybox({
                    href : '../../ajax/cliente/precio_cliente_frame.php',
                    type : 'iframe',
                    padding : 0
                });
            });
        </script>