<?php 
      require '../../re-use/head_frame.php';
?>
<section class="content">
<div class="col-md-12">
    <div class="box box-warning cliente-box">
        <div class="box-header">
            <h3 class="box-title">Ingreso Producto</h3>
        </div>
        <div class="box-body">
            <div class="col-md-6">
                <form role="form">
                     <div class="form-group">
                        <label>Codigo</label>
                        <input type="text" class="form-control" placeholder=" Codigo"/>
                    </div>
                    <div class="form-group">
                        <label>Nombre </label>
                        <input type="text" class="form-control" placeholder=" nombre"/>
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
                        <label>Categorias</label>
                        <select class="form-control">
                            <option>Categoria 1</option>
                            <option>Categoria 2</option>
                            <option>Categoria 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio </label>
                        <input type="text" class="form-control" placeholder="Precio"/>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Stock minimo </label>
                    <input type="text" class="form-control" placeholder=" Stock minimo"/>
                </div>
                <div class="form-group">
                    <label>Stock maximo </label>
                    <input type="text" class="form-control" placeholder=" Stock maximo"/>
                </div>
                <div class="form-group">
                    <label>Bodega</label>
                    <select class="form-control">
                        <option>Bodega 1</option>
                        <option>Bodega 2</option>
                        <option>Bodega 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Imagen</label>
                    <input type="file" id="exampleInputFile">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Observacion</label>
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div id="tbl_agregar_pieza_guia"></div>
<button class="btn btn-success btn-right btn-margin btn-lg" >Agregar</button>
<button class="btn btn-danger btn-right btn-margin btn-lg" >Cancelar</button>
</section>
<div class="clear"></div>

