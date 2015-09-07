<?php
    require '../../re-use/head.php';
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Recetas
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Recetas</a></li>
                <li class="active">Buscar Recetas</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Buscar Guia </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form form-buscar" id="form_buscar_receta">
                        <div class="col-md-5 col-md-offset-3">
                            <label>Codigo Guia</label>
                            <input type="text" class="form-control" id="search_receta" placeholder="Ingrese el Codigo de la Receta"/>
                            <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
            <div id="tbl_buscar_receta"></div>
        </section>
    </aside>
<?php
    require('../../re-use/footer.php');
?>
