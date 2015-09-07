                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                    <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
                    <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />   
                    <div class="box col-md-10">
                        <div class="box-header">
                            <h3 class="box-title">Resultados de busqueda</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Razon Social</th>
                                    <th>Direccion</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>TEXTIL CASSIS S.A.</td>
                                    <td>pedro de valdivia 5852</td>
                                    <td>
                                        <button class="cliente_fancy btn btn-success" >Ver</button>                                                
                                        <button class="btn btn-danger" >Eliminar</button>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Jane Doe</td>
                                    <td>TAUFIC HABIBEH EGNEM  </td>
                                    <td>pedro de valdivia 5852</td>
                                    <td>
                                        <button class="cliente_fancy btn btn-success" >Ver</button>                                                
                                        <button class="btn btn-danger" >Eliminar</button>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>TEXTIL CASSIS S.A.</td>
                                    <td>pedro de valdivia 5852</td>
                                    <td>
                                        <button class="cliente_fancy btn btn-success" >Ver</button>                                                
                                        <button class="btn btn-danger" >Eliminar</button>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>TAUFIC HABIBEH EGNEM  </td>
                                    <td>pedro de valdivia 5852</td>
                                    <td>
                                        <button class="cliente_fancy btn btn-success" >Ver</button>                                                
                                        <button class="btn btn-danger" >Eliminar</button>  
                                    </td>
                                </tr>
                            </tbody></table>
                        </div><!-- /.box-body -->
                    </div>
                    <script type="text/javascript">
                      $(document).ready(function() {

                        //maquinaria
                        $(".cliente_fancy").fancybox({
                            href : '../../ajax/cliente/detalle_cliente_frame.php',
                            type : 'iframe',
                            padding : 0
                        });
                      });
                    </script>