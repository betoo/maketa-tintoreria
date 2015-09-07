<?php
    require '../../re-use/head.php';
?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Reprocesos
                        <small></small>
                    </h1>
                    <!--ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Reprocesos</li>
                    </ol-->
                </section>
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Reprocesos</h3>
                        </div>
                        <div class="box-body">
                           <form role="form form-buscar" id="form_dividir_ot">
                                <div class="col-md-5 col-md-offset-3">
                                    <label></label>
                                    <input type="text" class="form-control" id="dividir_ot" placeholder="OT"/>
                                    <button class="btn-right btn btn-primary btn-margin" >Buscar</button>
                                </div>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                    <div id="tbl_reprocesos"></div>                    
                </section>
            </aside>
        <?php
            require('../../re-use/footer.php');
        ?>