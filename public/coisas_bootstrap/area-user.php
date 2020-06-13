<br><br><br>
<div class="container main-secction">
        <div class="row">
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <?if(isset($isFriend) && $isFriend == true){?>
                            <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">Mandar mensagem</button> 
                            <?}else{?>
                                <button id="btn-contact" data-toggle="modal" class="btn btn-success btn-block follow disabled">Mandar mensagem</button> 
                            <?}?>                            
                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                <p></p>
                                <span></span>
                            </div>                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1><?=$username?></h1>
                                </div>
                                <!-- Alterar Aqui!!!! -->
                                <?if(isset($isFriend) && $isFriend == true){?>
                                    <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                    <a class="btn btn-primary btn-block disabled">Alterar dados</a>
                                    </div>
                                <?}else{?>
                                    <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                    <a href="#" class="btn btn-primary btn-block">Alterar dados</a>
                                    </div>
                                <?}?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Dados Pessoais</a>
                                                </li>
                                                                                              
                                              </ul>
                                              
                                              <!-- Tab panes -->
                                              <br>
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Nome: </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><?=$username?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Email: </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><?=$email?></p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Te</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>12345678</p>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Profesion</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>Developer</p>
                                                                </div>
                                                            </div> -->
                                                </div>
                                                
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="../coisas_bootstrap/send-message.php" method="post">
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contact">Mandar Mensagem:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p for="msj">Envie um email para que a pessoa possa responder. <br> Ele cairá nas notificações do usuario</p>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto: </label>
                        <input type="text" class="form-control" id="assunto" name="assunto" min="3" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem: </label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" min="10" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                
                </div>
                </form>
            </div>
        </div>
    </div>
    