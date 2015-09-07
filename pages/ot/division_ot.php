<?php
    require '../../re-use/head.php';
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Divsión de OT
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Divsión de OT</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Dividir OT</h3>
                </div>
                <div class="box-body">
                   <form role="form form-buscar" id="form_dividir_ot">
                        <div class="col-md-5 col-md-offset-3">
                            <label></label>
                            <input type="text" class="form-control" id="search_reprocesos" placeholder="OT"/>
                            <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
            <div class=" " id="ot_original">

            </div>
            <div id="tbl_dividir_ot" class="col-md-8"> </div>        
        </section>
        
        <div class="clear"></div>
    </aside>
<?php
    require('../../re-use/footer.php');
?>