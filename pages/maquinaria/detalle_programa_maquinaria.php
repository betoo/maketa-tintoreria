

<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Programa Maquinaria
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
                                         <form role="form" action="programas_maquinaria.php">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vel. Carrete</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pos. TV</label>
                                                    <input type="text" class="form-control" placeholder="Pos. TV."/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kilos</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>RB</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bomba</label>
                                                    <input type="text" class="form-control" placeholder="Bomba"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Absorción</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>RB Lav</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tiempo Ciclo</label>
                                                    <input type="text" class="form-control" placeholder="Vel. Carrete"/>
                                                </div>
                                            </div>
                                            <button class="pull-right btn btn-success btn-margin btn-lg" onclick="alert(Registro Agregado );">Agregar</button>
                                            <div class="clear"></div> 
                                        </form>
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