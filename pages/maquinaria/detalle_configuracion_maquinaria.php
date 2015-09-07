

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
                                    <div class="box-body ">
                                         <form role="form" action="configuracion_maquinaria.php">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cliente</label>
                                                    <input type="text" class="form-control" placeholder="Cliente"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nombre Configuración</label>
                                                    <input type="text" class="form-control" placeholder="Nombre Configuración"/>
                                                </div>
                                            </div>
                                            <div class="clear"></div> 
                                        </form>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>    
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Pieza</h3>
                                </div>
                                <div class="box-body">
                                    <div class="box-body ">
                                         <form role="form" action="configuracion_maquinaria.php">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Fibra</label>
                                                    <input type="text" class="form-control" placeholder="Fibra"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Proporción</label>
                                                    <input type="text" class="form-control" placeholder="Proporción"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control" placeholder="Color"/>
                                                </div>
                                            </div>
                                            <div class="clear"></div> 
                                        </form>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Configuración</h3>
                                </div>
                                <div class="box-body">
                                    <div class="box-body ">
                                         <form role="form" action="configuracion_maquinaria.php">
                                            <div class="col-md-6">
                                                <!--Borrar -->
                                                <div class="form-group">
                                                    <label>Temperatura</label>
                                                    <input type="text" class="form-control" placeholder="Temperatura"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Velocidad</label>
                                                    <input type="text" class="form-control" placeholder="Velocidad"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ancho Terminación</label>
                                                    <input type="text" class="form-control" placeholder="Ancho Terminación"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alimentación</label>
                                                    <input type="text" class="form-control" placeholder="Alimentación"/>
                                                </div>
                                            </div>
                                            <div class="clear"></div> 
                                        </form>
                                        <div class="content_add_campo_meta col-md-12"></div>
                                        <a id="add_campo" href="#" >Agregar Nuevo Campo</a>
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
                
                $("#example1").dataTable({
                    "bAutoWidth": true,
                    "bPaginate": false,
                });

                $(" #add_campo").fancybox({
                    type  : 'iframe',
                    href  : '../../ajax/maquinaria/nuevo_campo_maquinaria_frame.php',
                    beforeClose: function(){
                        //buscando nuevo campo 
                        nombre_nuevo_campo=$('.fancybox-iframe').contents().find('.nombre_campo').val();
                    },
                    afterClose: function(){
                        //estructura de input con nombre del campo 
                        var campo_meta = '<div  class="col-md-6">'+
                                            '<div class="form-group">'+
                                                '<label>'+nombre_nuevo_campo+'</label>'+
                                                '<input type="text" class="form-control" placeholder="'+nombre_nuevo_campo+'"/>'+
                                            '</div>'+
                                        '</div>';
                        alert('Registro Agregado');
                        //agrega input en document
                        $(".content_add_campo_meta").append(campo_meta);

                    }
                });
            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>