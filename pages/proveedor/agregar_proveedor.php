<?php
    require '../../re-use/head.php';
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Proveedor
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Lista Proveedor</li>
                    </ol-->
                </section>
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Ingreso Proveedor</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                     <div class="form-group">
                                        <label>Codigo</label>
                                        <input type="text" class="form-control" placeholder="Codigo"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre </label>
                                        <input type="text" class="form-control" placeholder="nombre"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Rut </label>
                                        <input type="text" class="form-control" placeholder="rut"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Razon Social </label>
                                        <input type="text" class="form-control" placeholder="Razon social"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Encargado</label>
                                        <input type="text" class="form-control" placeholder="Encargado"/>
                                    </div>
                                </form>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Comuna</label>
                                        <select class="form-control">
                                             <option>Seleccione</option>
                                            <option>Providencia</option>
                                            <option>Ñuñoa</option>
                                            <option>Macul</option>
                                        </select>
                                    </div>
                                    <label>Ciudad</label>
                                    <select class="form-control">
                                        <option>Santiago</option>
                                        <option>Valparaiso</option>
                                        <option>Concepcion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Direccion </label>
                                    <input type="text" class="form-control" placeholder="Direccion"/>
                                </div>
                                <div class="form-group">
                                    <label>Rubro  </label>
                                    <input type="text" class="form-control " placeholder="Rubro "/>
                                </div>
                                <div class="form-group">
                                    <label>Telefono </label>
                                    <input type="text" class="form-control " placeholder="Telefono"/>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <form action="lista_proveedor.php">
                    <button class="btn btn-success btn-right btn-margin btn-lg" >Agregar</button>
                    <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
                </form>
                </section>
            </aside>
        </div>
        <?php
            require('../../re-use/footer.php');
        ?>