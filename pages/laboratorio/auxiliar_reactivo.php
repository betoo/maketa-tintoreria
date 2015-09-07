<?php
    require '../../re-use/head.php';
?>
            <!--Edit table-->
            <script type="text/javascript" src="http://localhost/maketa/libs/editable/numeric-input-example.js"></script>
        <script type="text/javascript" src="http://localhost/maketa/libs/editable/mindmup-editabletable.js"></script>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Auxiliar Reactivo
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Auxiliar Reactivo</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="col-md-12">
                        <div class=" ">
                            <!--div class="box-header">
                                <h3 class="box-title">Auxiliar Reactivo</h3>
                            </div-->
                            <br>
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#lab1" data-toggle="tab">Laboratorio 1</a></li>
                                    <li><a href="#lab2" data-toggle="tab">Laboratorio 2</a></li>
                                    <li><a href="#lab3" data-toggle="tab">Laboratorio 3</a></li>
                                    <!--li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li-->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="lab1">
                                        <form>  
                                            <div class="box-body">
                                                <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                                    <tr>
                                                        <th>
                                                            <label>Corante</label>
                                                        </th>
                                                        <th>
                                                            <label>Sal (g/l)</label>
                                                        </th>
                                                        <th>
                                                            <label>Carb. de Sodio</label>
                                                        </th>
                                                        <th>
                                                            <label>
                                                                Soda caustica 38° Bé (ml/l)
                                                            </label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1"> < 0,10</td>
                                                        <td tabindex="1">30</td>
                                                        <td tabindex="1">6,0</td>
                                                        <td tabindex="1">-----</td>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1">0,10</td>
                                                        <td tabindex="1">34</td>
                                                        <td tabindex="1">0,6</td>
                                                        <td tabindex="1">------</td>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1">0,20</td>
                                                        <td tabindex="1">38,0</td>
                                                        <td tabindex="1">6,0</td>
                                                        <td tabindex="1">-----</td>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1">0,30</td>
                                                        <td tabindex="1">42</td>
                                                        <td tabindex="1">6,0</td>
                                                        <td tabindex="1">----</td>
                                                    </tr>
                                                    <tr>
                                                        <td tabindex="1">0,40</td>
                                                        <td tabindex="1">46,0</td>
                                                        <td tabindex="1">6,0</td>
                                                        <td tabindex="1">-----</td>
                                                    </tr>
                                                </table>


                                                <div class="clear"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="lab2">
                                       <div class="box-body">
                                            <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                                <tr>
                                                    <th>
                                                        <label>Colorante</label>
                                                    </th>
                                                    <th>
                                                        <label>Sal (g/l)</label>
                                                    </th>
                                                    <th>
                                                        <label>Carb. de Sodio</label>
                                                    </th>
                                                    <th>
                                                        <label>
                                                            Soda caustica 38° Bé (ml/l)
                                                        </label>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1"> < 0,10</td>
                                                    <td tabindex="1">30</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,10</td>
                                                    <td tabindex="1">34</td>
                                                    <td tabindex="1">0,6</td>
                                                    <td tabindex="1">------</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,20</td>
                                                    <td tabindex="1">38,0</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,30</td>
                                                    <td tabindex="1">42</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,40</td>
                                                    <td tabindex="1">46,0</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                            </table>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="lab3">
                                       <div class="box-body">
                                            <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                                <tr>
                                                    <th>
                                                        <label>Corante</label>
                                                    </th>
                                                    <th>
                                                        <label>Sal (g/l)</label>
                                                    </th>
                                                    <th>
                                                        <label>Carb. de Sodio</label>
                                                    </th>
                                                    <th>
                                                        <label>
                                                            Soda caustica 38° Bé (ml/l)
                                                        </label>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1"> < 0,10</td>
                                                    <td tabindex="1">30</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,10</td>
                                                    <td tabindex="1">34</td>
                                                    <td tabindex="1">0,6</td>
                                                    <td tabindex="1">------</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,20</td>
                                                    <td tabindex="1">38,0</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,30</td>
                                                    <td tabindex="1">42</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">----</td>
                                                </tr>
                                                <tr>
                                                    <td tabindex="1">0,40</td>
                                                    <td tabindex="1">46,0</td>
                                                    <td tabindex="1">6,0</td>
                                                    <td tabindex="1">-----</td>
                                                </tr>
                                            </table>


                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div id="tbl_agregar_pieza_guia"></div>
                    <button class="btn btn-success btn-right btn-margin btn-lg" >Modificar</button>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php
            require('../../re-use/footer.php');
        ?>
