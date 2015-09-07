<?php
    require '../../re-use/head_cliente.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Acceso Clientes
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
                            <h3 class="box-title">Estado de Pedidos</h3>
                        </div>
                        <div class="box-body table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                                <tr>
                                    <th>Etapa Actual </th>
                                    <th>Órden de Trabajo</th>
                                    <th>Guia Cliente</th>
                                    <th>Proceso</th>
                                    <th>N° Piezas</th>
                                    <th>Kilos</th>
                                    <th>Mensaje</th>
                                </tr>
                                <tr>
                                    <td>Teñido</td>
                                    <td><a href="" class="ot_acceso_cliente"> 00072</a></td>
                                    <td>21391</td>
                                    <td>BOTELLA 25286</td>
                                    <td>12</td>
                                    <td>175.3</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                                <tr>
                                    <td>BLANQUEAR</td>
                                    <td><a href="" class="ot_acceso_cliente">000692</a></td>
                                    <td>21394</td>
                                    <td>BLANCO</td>
                                    <td>40</td>
                                    <td>196.6</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                                <tr>
                                    <td>ABRIR 2</td>
                                    <td><a href="" class="ot_acceso_cliente">000702</a></td>
                                    <td>21393</td>
                                    <td>NEGRO REAC</td>
                                    <td>2</td>
                                    <td>154.8</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                                <tr>
                                    <td>Teñido</td>
                                    <td><a href="" class="ot_acceso_cliente">000722</a></td>
                                    <td>21391</td>
                                    <td>BOTELLA 25286</td>
                                    <td>7</td>
                                    <td>175.3</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                                <tr>
                                    <td>BLANQUEAR</td>
                                    <td><a href="" class="ot_acceso_cliente">000692</a></td>
                                    <td>21394</td>
                                    <td>BLANCO</td>
                                    <td>21</td>
                                    <td>196.6</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                                <tr>
                                    <td>ABRIR 2</td>
                                    <td><a href="" class="ot_acceso_cliente">000702</a></td>
                                    <td>21393</td>
                                    <td>NEGRO REAC</td>
                                    <td>4</td>
                                    <td>154.8</td>
                                    <td><i class="mensaje_cliente fa fa-envelope"></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--button class="btn-right btn btn-primary" >Guardar</button-->
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>
<script type="text/javascript">
    $(function() {
        /*
        $("#example1").dataTable({
            "bAutoWidth": true,
            "bPaginate": false,
        });*/
        //lightBox
        $(".ot_acceso_cliente").fancybox({
            href : '../../ajax/ot/detalle_ot_frame_cliente.php',
            type : 'iframe',
            padding : 0
        });
        $(".mensaje_cliente").fancybox({
            href : '../../ajax/mensajes/detalle_mensaje_frame.php',
            type : 'iframe',
            padding : 0
        });
    });
</script>
<?php
    require '../../re-use/footer.php';
?>