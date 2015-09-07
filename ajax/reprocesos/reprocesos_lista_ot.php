
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">OT 205555</h3>
            </div>

            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Etapa de Rechazo</label> <select class="fecha form-control">
                            <option>
                                seleccione
                            </option>

                            <option>
                                MARCAR TELA
                            </option>

                            <option>
                                HACER RECETA OT
                            </option>

                            <option>
                                PREPARACION
                            </option>

                            <option>
                                TEÑIDO
                            </option>

                            <option>
                                CENTRIFUGADO
                            </option>

                            <option>
                                PREP SECADOR
                            </option>

                            <option>
                                SECADO
                            </option>

                            <option>
                                DECATIZADO
                            </option>

                            <option>
                                PESO DE SALIDA
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Procesar desde</label> <select class="fecha form-control">
                            <option>
                                seleccione
                            </option>

                            <option>
                                MARCAR TELA
                            </option>

                            <option>
                                HACER RECETA OT
                            </option>

                            <option>
                                PREPARACION
                            </option>

                            <option>
                                TEÑIDO
                            </option>

                            <option>
                                CENTRIFUGADO
                            </option>

                            <option>
                                PREP SECADOR
                            </option>

                            <option>
                                SECADO
                            </option>

                            <option>
                                DECATIZADO
                            </option>

                            <option>
                                PESO DE SALIDA
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Problema Principal</label> <select class="form-control" multiple="2">
                        <option>
                            Color fuera de tono
                        </option>

                        <option>
                            Manchas de suaviza
                        </option>

                        <option>
                            Quebraduras
                        </option>

                        <option>
                            Pliegues
                        </option>

                        <option>
                            Mala igualación
                        </option>

                        <option>
                            CO manchado
                        </option>
                    </select>

                    <div class="checkbox" id="reproceso_ot">
                        <label><input id="check_reproceso_ot" type="checkbox"> Reprocesar OT Completa</label>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="white">
        <div class="">
            <div class="box-header">
                <h3 class="box-title">Piezas</h3>
            </div>

            <div class="box-body">
                <ul class="droptrue" id="sortable1">
                    <li class="ui-state-default">Pieza 1</li>

                    <li class="ui-state-default">Pieza 2</li>

                    <li class="ui-state-default">Pieza 3</li>

                    <li class="ui-state-default">Pieza 4</li>

                    <li class="ui-state-default">Pieza 5</li>
                </ul>

                <ul class="dropfalse" id="sortable2"></ul>
                <br style="clear:both">
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {
        $("#check_reproceso_ot").click(function() {  
            if($("#check_reproceso_ot").is(':checked')) {  
                $('#piezas_reprocesos').hide();
            } else {  
                $('#piezas_reprocesos').show();
            }       
        }); 
        //arrastar piezas
        $( "ul.droptrue" ).sortable({
          connectWith: "ul"
        });

        $( "ul.dropfalse" ).sortable({
          connectWith: "ul",
          dropOnEmpty: false
        });

        $( "#sortable1, #sortable2, #sortable3" ).disableSelection();
    });
    </script>