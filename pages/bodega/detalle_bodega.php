<?php
    require '../../re-use/head.php';
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            Productos
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Agregar Guia</li>
        </ol>
    </section>
    <section class="content bodega">
    <div class="col-md-12">
            <div class="">
                <div class="box-header"> 
                </div>
                <div class="box-body">
                    <div class="row">
                        <form mathod="POST" action="lista_bodega.php">
                            <div class="col-md-12">
                                <div class="box box-warning cliente-box">
                                    <div class="box-header">
                                        <h3 class="box-title">Bodega</h3>
                                    </div>
                                    <div class="box-body">
                                        <form role="form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nombre Bodega</label>
                                                    <input type="text" class="form-control" placeholder="Nombre Bodega"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Encargado</label>
                                                    <select class="form-control">
                                                        <option>José</option>
                                                        <option>Pepe</option>
                                                        <option>Alfredo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Observacion</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="listar_bodega.php" data-toggle="tab">Productos en bodega</a></li>
                                    <li><a href="pedidos_bodega.php" data-toggle="tab">Pedidos</a></li>
                                    <li><a href="movimiento_stock_bodega.php" data-toggle="tab">Movimientos de Stock</a></li>
                                    <li><a href="ajuste_stock_bodega.php" data-toggle="tab">Ajuste de Stock</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="moneda">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</aside>
<?php
    require('../../re-use/footer.php');
?>
                   