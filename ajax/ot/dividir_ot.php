         <script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>js/funciones/funciones.js"></script>
         <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
         <script src="<?php echo "http://" . $_SERVER['SERVER_NAME'] .'/maketa/'; ?>/js/AdminLTE/app.js" type="text/javascript"></script>


         <div class="box box-warning">
             <div class="box-header">
                 <h3 class="box-title">Dividir OT</h3>
             </div>
             <div class="box-body">
                <div class="row dividir_ot">
                  <div class="col-xs-12 col-sm-4  col-md-4 col-lg-4">
                     <div class="box box-solid box-success">
                        <div class="box-header">
                           <h3 class="box-title">OT 20591</h3>
                           <div class="box-tools pull-right">
                               <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                               <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                           </div>
                        </div>
                        <div class="box-body">
                           <ul id="list" class="connectedSortable list_ot ">
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 1</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 2</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 3</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 4</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 5</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 6</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 7</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 8</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 9</li>
                              <li class="ui-widget-content"><span class="sort-handle">&#8225;</span>pieza 10</li>
                           </ul>
                           <div class="clear"></div>
                        </div>
                     </div>
                  <button class="btn-right btn_dividir btn btn-primary" onclick="dividir_ot()">Dividir OT</button>
                  <div class="clear"></div>
                  </div>
                  <div class="box_ot_division col-xs-12 col-sm-8  col-md-8 col-lg-8">
                 
                  </div>
               </div>
             </div>
             <form action="listar_ot_dividida.php">
                  <button class="btn-right btn_dividir btn btn-success" onclick="">Guardar</button>
              </form>
              <div class="clear"></div>
         </div>