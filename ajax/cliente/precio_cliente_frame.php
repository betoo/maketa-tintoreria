                    <?php
                        require '../../re-use/head_frame.php';
                    ?>
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Precios</h3>
                        </div>
                        <form>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fibra</label>
                                        <select class="form-control">
                                             <option>Algodón</option>
                                            <option>Poliester/Algodón</option>
                                            <option>Poliester</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="form-control" placeholder="Color"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Codigo Color</label>
                                        <input type="text" class="form-control" placeholder="Codigo Color"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" placeholder="Precio"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Observación</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <button class="btn-right btn  btn-success btn-margin" >Guardar</button>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                    <?php
                        require '../../re-use/footer.php';
                    ?>