         <div class="col-md-12">
            <div class="col-md-6">
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
                        <label>Fecha Pedido</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-usd"></i>
                            </div>
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Proveedor </label>
                        <select class="form-control">
                            <option>proveedor 1</option>
                            <option>proveedor 2</option>
                            <option>proveedor 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Observacion</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <a id="agregar_pedido" href="tbl_pedidos_bodega.php" class=" btn btn-success btn-right btn-margin" >Agregar</a>
                </form>
                <div class="clear"></div>
            </div>
            <div class="col-md-6">
                <div class="tbl_pedido_prd box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Proveedor</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="tbl_agregar_pieza_guia"></div>
        <button class="btn btn-success btn-right btn-margin btn-lg"  onclick="alert('Pedido Agregado');">Agregar Pedido</button>
        <button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
        <div class="clear"></div>

