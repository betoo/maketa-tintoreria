<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/jquery/jquery-2.1.3.min.js"></script>
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
        <!--script type="text/javascript" src="<?php //echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/funciones/funciones.js"></script-->
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/estilos.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>css/estilos.css" rel="stylesheet" type="text/css" />
        <!--fancyapp-->
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Orden de Trabajo
                        <small></small>
                    </h1>
                </section>
                 <section class="content">
                    <div class="col-md-12">
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Crear orden laboratorio</h3>
                            </div>
                            <div class="box-body">
                                <form action="lista_orden_lab.php" id="orden_lab_fancy" role="form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="text" class=" form-control" placeholder="Cliente"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Laboratorio</label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                                <option>Archroma</option>
                                                <option>Lab 2</option>
                                                <option>Lab 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" class=" form-control" placeholder="Fecha"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class=" form-control" placeholder="Color"/>
                                            <ul id="lista_colores"></ul>
                                            <a class="btn-right"href="" onclick="agregar(); return false;">Agregar</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tela</label>
                                            <input type="text" class=" form-control" placeholder="Tela"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Mezcla</label>
                                            <input type="text" class=" form-control" placeholder="Mezcla"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Material</label>
                                            <input type="text" class=" form-control" placeholder="Material"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Quimica</label><!--laboratorio-->
                                            <input type="text" class=" form-control" placeholder="Quimica"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Observacion</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div id="tbl_agregar_pieza_guia"></div>
                        <button class="btn btn-success btn-right btn-margin btn-lg agregar_ord_lab" onclick="alert('Registro Ingresado');">Agregar Orden</button>
                        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                    </form>
                </section>  
            </aside>
        </div>
      </body>
</html>

<script type="text/javascript">
$(function() {
        $('#orden_lab_fancy').submit(function(e){
            e.preventDefault();
            parent.$.fancybox.close();
        });
        
    });
    function agregar() {
        campo = '<li><input class="fecha form-control" type="text" name="color" placeholder="Color" /></li>';
        $("#lista_colores").append(campo);
    }
</script>