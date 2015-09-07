<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Maquinaria
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Bodega</li>
                    </ol-->
                </section>
                <section class="content productos">
                    <div class="piezas col-md-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <!--h3 class="box-title"></h3-->
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive">
                                    <form id="add_bodega" action="agregar_maquinaria.php">
                                        <button class="pull-left btn btn-success btn-margin">Nueva maquinaria</button>
                                    </form>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Capacidad</th>
                                                <th>Disponibilidad</th>
                                                <th>Mantención</th>
                                                <th>Configuración</th>
                                                <th>Programas</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="agregar_maquinaria.php">
                                                        ET HT DEVREKHA
                                                    </a>
                                                </td>
                                                <td>
                                                    1000 KG
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_media">
                                                        Media
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="" href="mantencion_maquinaria.php">Mantención</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="configuracion_maquinaria.php">Configuración</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="programas_maquinaria.php">Programas</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_bodega.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_bodega.php"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="agregar_maquinaria.php">
                                                        JIGGER VALD.HENRIKSE
                                                    </a>
                                                </td>
                                                <td>
                                                    450 KG
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_alta">
                                                        Alta
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="" href="mantencion_maquinaria.php">Mantención</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="configuracion_maquinaria.php">Configuración</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="programas_maquinaria.php">Programas</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_personal.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_personal.php"></a>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <a href="agregar_maquinaria.php">
                                                        CENTRIFUGA
                                                    </a>
                                                </td>
                                                <td>
                                                    50 KG
                                                </td>
                                                <td>
                                                    <label class="disponibilidad_maq_baja">
                                                        Baja
                                                    </label>
                                                </td>
                                                <td>
                                                    <a class="" href="mantencion_maquinaria.php">Mantención</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="configuracion_maquinaria.php">Configuración</a>
                                                </td>
                                                <td>    
                                                    <a class="" href="programas_maquinaria.php">Programas</a>
                                                </td>
                                                <td>
                                                    <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_maquinaria.php" onclick="confirm('¿desea eliminar el registro?'); return false;"></a>
                                                    <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_maquinaria.php"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clear"></div>
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
            });
        </script>
        <?php
            require('../../re-use/footer.php');
        ?>