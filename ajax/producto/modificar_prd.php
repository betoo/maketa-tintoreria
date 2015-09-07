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
                <section class="content productos">
                <div class="col-md-12">
                        <div class="">
                            <div class="box-header">
                                <!--h3 class="box-title">Datos Especificos</h3-->
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="lista_prd" data-toggle="tab">Lista</a></li>
                                                <li><a href="agregar_prd" data-toggle="tab">Agregar</a></li>
                                                <li><a href="modificar_prd" data-toggle="tab">Modificar</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="moneda">
                                                    <form id="form_moneda_mantencion">  
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="Nombre"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Signo</label>
                                                            <input type="text" class="form-control" placeholder="Signo"/>
                                                        </div>
                                                        <div id="tbl_moneda_mantendor"></div>
                                                        <button class="btn btn-success btn-right btn-margin btn-lg">Ingresar</button>
                                                        <button class="btn btn-primary btn-right btn-margin btn-lg">Listar</button>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>
