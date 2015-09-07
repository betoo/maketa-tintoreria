<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <!--fancyapp-->
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- jQuery UI -->
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/estilos.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/funciones/funciones.js"></script>
    </head>
    <body>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Detalle Guia
                        <small></small>
                    </h1>
                </section>
                <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Cliente</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="text" class="form-control" placeholder=" Codigo" value="ACCOR" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Rut</label>
                                            <input type="text" class="form-control" placeholder="Rut" value="78.206.910-1" disabled/>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask disabled value="02-02-2015" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Guia Cliente </label>
                                        <input type="text" class="form-control" placeholder=" guia cliente" value="076615" disabled/>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Detalle de Piezas</h3>
                            </div>
                            <div class="box-body table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>N° Pieza</th>
                                        <th>Fibra</th>
                                        <th>Proporcion 1</th>
                                        <th>Proporcion 2</th>
                                        <th>Lote</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>POLIESTER</td>
                                        <td>70</td>
                                        <td>30</td>
                                        <td>78517</td>
                                        <td>                                           
                                            <button class="btn btn-danger" >Eliminar</button>                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>184</td>
                                        <td>POLICOTTON</td>
                                        <td>70</td>
                                        <td>30</td>
                                        <td>78516</td>
                                        <td>                                           
                                            <button class="btn btn-danger" >Eliminar</button>                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>185</td>
                                        <td>ACRILICO</td>
                                        <td>70</td>
                                        <td>30</td>
                                        <td>78518</td>
                                        <td>                                           
                                            <button class="btn btn-danger" >Eliminar</button>                                                
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box box-success cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Datos Especificos</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Carga</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha Descarga</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="datemask" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total Kilos</label>
                                        <input type="text" class="form-control" placeholder="total kilos" />
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <button class="btn btn-danger btn-right btn-margin btn-lg" onclick="cerrar_lightbox();">Cancelar</button>
                        <button class="btn btn-primary btn-right btn-margin btn-lg" onclick="alert('Registro modificado');cerrar_lightbox();">Modificar</button>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
      </body>
</html>