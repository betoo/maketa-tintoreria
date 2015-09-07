<?php
    require '../../re-use/head_frame.php';
?>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Para:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Para">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">CC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Con copia">
                                </div>
                            </div>
                            <!--div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">BCC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Copia Oculta">
                                </div>
                            </div-->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">OT</span>
                                            <input name="email_to" type="email" disabled class="form-control" value="90003" placeholder="OT">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">Cliente</span>
                                            <input name="email_to" type="email" disabled class="form-control" placeholder="Cliente"  value="ACC">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="email_message" class="form-control" placeholder="Mensaje" style="height: 120px;"></textarea>
                            </div>
                            <!--div class="form-group">
                                <div class="btn btn-success btn-file">
                                    <i class="fa fa-paperclip"></i> Adjuntar
                                    <input type="file" name="attachment"/>
                                </div>
                                <p class="help-block">Max. 32MB</p>
                            </div-->

                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Descartar</button>

                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Enviar Mensaje</button>
                        </div>
                    </form>

<?php
    require '../../re-use/footer.php';
?>