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
        <section class="content">
            <div class="col-md-12">
                <div class="box box-warning cliente-box">
                    <div class="box-header">
                        <h3 class="box-title">Cliente</h3>
                    </div>
                    <div class="box-body">
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
                                <label>Razon Social</label>
                                <input type="text" class="form-control" placeholder="Ingrese el Razon Social"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Encargado</label>
                                <input type="text" class="form-control" placeholder="Ingrese el Encargado"/>
                            </div>
                            <div class="form-group">
                                <label>Ciudad</label>
                                <select class="form-control">
                                    <option>Santiago</option>
                                    <option>Viña del mar</option>
                                    <option>Concepcion</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn-primary btn-right btn btn-primary btn-margin" >Modificar</button>
                        <div class="clear"></div>                
                        </form>
                    </div>
                    </div>
                    <div class="clear"></div>
        </section><!-- /.content -->
    </body>
</html>