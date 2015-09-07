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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>>
                        </div>
                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Mantención</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha</th>
                                                    <th>Tipo</th>
                                                    <th>Trabajo Realizado</th>
                                                    <th>Materiales utilizados</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        02-12-2015
                                                    </td>
                                                    <td>Mecanico</td>
                                                    <td>
                                                        <p>arreglo de valvula</p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            teflones nuevos
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        14-2-2015
                                                    </td>
                                                    <td>Mecanico</td>
                                                    <td>
                                                        <p>reparacion bomba cambio sello</p>
                                                    </td>
                                                    <td>
                                                        <p>cambio sello lado motor</p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        27-6-2015
                                                    </td>
                                                    <td>Mecanico</td>
                                                    <td>
                                                        <p>cambio sello lado motor</p>
                                                    </td>
                                                    <td>
                                                        <p>sello rectificado</p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <form id="new_mantencion" action="agregar_maquinaria.php">
                                        <button class="pull-right btn btn-success btn-margin">Nueva mantención</button>
                                    </form>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <div class="box box-warning cliente-box">
                            <div class="box-header">
                                <h3 class="box-title">Configuración</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Temperatura</th>
                                                    <th>Velocidad</th>
                                                    <th>Ancho</th>
                                                    <th>Alimentación</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        30°
                                                    </td>
                                                    <td>
                                                        <p>100</p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            1.5
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            15
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        23°
                                                    </td>
                                                    <td>
                                                        <p>120</p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            1
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>12</p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <a href="modificar_maquinaria.php">
                                                            ET HT DEVREKHA
                                                        </a>
                                                    </td>
                                                    <td>
                                                        27°
                                                    </td>
                                                    <td>
                                                        <p>23</p>
                                                    </td>
                                                    <td>
                                                        <p>1.8</p>
                                                    </td>
                                                    <td>
                                                        <p>43</p>
                                                    </td>
                                                    <td>
                                                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <form id="new_mantencion" action="agregar_maquinaria.php">
                                        <button class="pull-right btn btn-success btn-margin">Nueva configuración</button>
                                    </form>
                                </div>
                                <div class="clear"></div>
                            </div>


                            <form action="lista_maquinaria.php">
                                <button class="btn btn-primary btn-right btn-margin btn-lg" onclick="confirm('¿Desea modificar el registro?');">Modificar</button>
                                <button class="btn btn-danger btn-right btn-margin btn-lg" >Eliminar</button>
                            </form>
                        </div>
                    <!--/div-->
                    
                </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>

        <script type="text/javascript">
              $(document).ready(function() {

                //nueva mantencion maquinaria

                $("#new_mantencion").fancybox({
                    href : '../../ajax/maquinaria/configuracion_maquinaria_frame.php',
                    type : 'iframe',
                    padding : 0
                });
              });
        </script>
