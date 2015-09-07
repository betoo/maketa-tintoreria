<?php
    require '../../re-use/head.php';
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Agregar Lote
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Agregar Lote</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Buscar Ot</h3>
                </div>
                <div class="box-body">
                   <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Selección</th>
                                    <th>OT</th>
                                    <th>Cliente</th>
                                    <th>Kilos</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>99591</td>
                                    <td>LLA</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>184</td>
                                    <td>ACC</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>185</td>
                                    <td>CAI</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>99591</td>
                                    <td>LLA</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>184</td>
                                    <td>ACC</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>185</td>
                                    <td>CAI</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>99591</td>
                                    <td>LLA</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>184</td>
                                    <td>ACC</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>185</td>
                                    <td>CAI</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>99591</td>
                                    <td>LLA</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>184</td>
                                    <td>ACC</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td>185</td>
                                    <td>CAI</td>
                                    <td>70</td>
                                    <td><a class="detalle_ot" href="#">Ver OT </a></td>
                                </tr>
                            </tbody>
                            <!--tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot-->
                        </table>
                    </div>
                    <form id="crear_lote" >
                        <button class="btn-right btn btn-primary btn-margin">Agregar </button>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="lote"></div>        
        </section>
    </aside>
<?php
    require('../../re-use/footer.php');
?>
<script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/jquery/jquery-2.1.3.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>libs/fancyapps/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>/js/AdminLTE/app.js" type="text/javascript"></script>
        
<script type="text/javascript">
    $(function() {
        /*
        $("#example1").dataTable({
            "bAutoWidth": true,
            "bPaginate": false,
        });
        */
        //lightBox
        $(".detalle_ot").fancybox({
            href : '../../ajax/ot/detalle_ot_frame.php',
            type : 'iframe',
            padding : 0
        });

    });
</script>