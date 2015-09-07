<?php
    require '../../re-use/head_frame.php';
?>
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Disponibilidad</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Fecha ultima compra</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Palar3c asdasdasdadsasd</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>7000 KG</td>
                    <td>Quimico</td>
                    <td>12-03-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                        <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>Siamsf2rl</td>
                    <td><label class="prd_agotado">Agotado</label></td>
                    <td>1000 KG</td>
                    <td>Colorante</td>
                    <td>02-03-2014</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>PQSCP</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>7000 KG</td>
                    <td>Quimico</td>
                    <td>01-11-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>Pqaa</td>
                    <td><label class="prd_agotado">Agotado</label></td>
                    <td>15000 KG</td>
                    <td>Colorante</td>
                    <td>12-03-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>PALWD</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>2000 KG</td>
                    <td>Colorante</td>
                    <td>08-05-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>Palar3c</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>7000 KG</td>
                    <td>Quimico</td>
                    <td>12-03-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>Siamsf2rl</td>
                    <td><label class="prd_agotado">Agotado</label></td>
                    <td>1000 KG</td>
                    <td>Colorante</td>
                    <td>02-03-2014</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>PQSCP</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>7000 KG</td>
                    <td>Quimico</td>
                    <td>01-11-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>Pqaa</td>
                    <td><label class="prd_agotado">Agotado</label></td>
                    <td>15000 KG</td>
                    <td>Colorante</td>
                    <td>12-03-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
                <tr>
                    <td>PALWD</td>
                    <td><label class="prd_stock">En Stock</label></td>
                    <td>2000 KG</td>
                    <td>Colorante</td>
                    <td>08-05-2015</td>
                    <td>
                        <a class="glyphicon glyphicon-remove eliminar_prd" href="elimina_prd.php"></a>
                         <a class="glyphicon glyphicon-pencil modificar_prd" href="modificar_prd.php"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<script type="text/javascript">
$(function() {
    $("#example1").dataTable({
        "bAutoWidth": true,
        "bPaginate": false,
    });

});
</script>