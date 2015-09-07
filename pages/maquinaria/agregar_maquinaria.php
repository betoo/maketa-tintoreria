<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Maquinaria
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Maquinaria</a></li>
                        <li class="active">Agregar Maquinaria</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="col-md-12">
                    <div class="box box-warning cliente-box">
                        <div class="box-header">
                            <h3 class="box-title">Maquinaria</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder=" Nombre"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Capacidad </label>
                                        <input type="text" class="form-control" placeholder=" Capacidad"/>
                                    </div>
                                     <div class="form-group">
                                        <label>Hora</label>
                                        <input type="text" class="form-control" placeholder="Ingrese Hora"/>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jornada</label>
                                    <input type="text" class="form-control" placeholder=" Jornada"/>
                                </div>
                                <div class="form-group">
                                    <label>Disponibilidad</label>
                                    <input type="text" class="form-control" placeholder=" Hora"/>
                                </div>
                                <div class="form-group">
                                    <label>Carga Nominal</label>
                                    <input type="text" class="form-control" placeholder=" Jornada"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>Etapas</label>
                                    <div class="clear"></div>
                                    <select name="origen[]" id="origen" multiple="multiple" size="8">
                                        <option value="2">ABRIR 2 </option>
                                        <option value="3">ABRIR BLANCO </option>
                                        <option value="4">ABRIR CARDA </option>
                                        <option value="5">BLANQUEAR </option>
                                        <option value="6">CARDA BLANCO </option>
                                        <option value="7">CARDADO </option>
                                        <option value="8">CENTRIFUGA BCO </option>
                                        <option value="1">RAMA POLIN </option>
                                        <option value="2">RAMA RAQUELADO </option>
                                        <option value="3">RAMA SECADO </option>
                                        <option value="4">RAQUELADO </option>
                                        <option value="5">SECADO </option>
                                        <option value="6">SECADO BLANCO </option>
                                        <option value="7">TEÑIDO </option>
                                        <option value="8">VAPORIZADO </option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="button" class="pasar izq" value="Pasar »">
                                    <input type="button" class="quitar der" value="« Quitar">
                                    <!--input type="button" class="pasartodos izq" value="Todos »">
                                    <input type="button" class="quitartodos der" value="« Todos"-->
                                </div>
                                <div class="col-md-4">
                                    <select name="destino[]" id="destino" multiple="multiple" size="8">
                                        <option value="1">ABRIR 1 </option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="clear"></div>                
                            </form>
                        </div>
                        <div class="clear">
                            
                        </div></div>
                        <div id="tbl_agregar_pieza_guia"></div>
                        <form action="lista_maquinaria.php">
                            <button class="btn btn-success btn-right btn-margin btn-lg" onclick="alert('Registro agregado');" >Ingresar Maquina</button>
                            <button class="btn btn-danger btn-right btn-margin btn-lg" >Eliminar</button>
                        </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
