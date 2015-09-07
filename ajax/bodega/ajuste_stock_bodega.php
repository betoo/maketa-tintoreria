<div class="col-md-12">
    <form role="form" id="form_pedidos_prod">
         <div class="form-group">
            <label>Nombre producto</label>
            <select class="form-control">
                <option>producto 1</option>
                <option>producto 2</option>
                <option>producto 3</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha Ajuste</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
            </div>
        </div>
       <div class="form-group">
            <label>Cantidad</label>
            <input type="text" class="form-control"/>
        </div>
        <div class="form-group ">
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Aumento 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Disminuye
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Observacion</label>
            <textarea class="form-control"></textarea>
        </div>
        <a id="agregar_pedido" href="tbl_pedidos_bodega.php" class=" btn btn-success btn-right btn-margin" >Agregar</a>
    </form>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div id="tbl_agregar_pieza_guia"></div>
<button class="btn btn-success btn-right btn-margin btn-lg"  onclick="alert('Pedido Agregado');">Agregar Pedido</button>
<button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
<div class="clear"></div>

