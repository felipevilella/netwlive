

<div class="container">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window ">
        <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h6 class="panel-title" id="status">
                          </h6>
                  </div>
                  <div class="col-md-4 col-xs-4" style="text-align: right;">
                    <a href="menu?1"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                </div>
            </div>
            <div class="panel-body msg_container_base" id="chat">

            </div>
        </div>
        <?php
        if(isset($_POST["enviar"])&& $_POST["enviar"]=="mensagem"){
          
           $emailamigo=$_POST["emailamigo"];
           $mensagem=$_POST["mensagem"];
           $email=$_SESSION["usuarioLogin"];
           $nomeusario=$_SESSION['usuarioNome'];
           require_once("funcoes.php");
           enviar_mensagem($email,$mensagem,$emailamigo);
           notificacao_chat($email,$mensagem,$emailamigo,$nomeusario);


       }
       ?>
       <div class="panel-footer">
        <div class="input-group">
            <form action="#" method="post">
                <?php
                echo "<input type='hidden' name='emailamigo' value='$Email_chat'> ";
                ?>
                <table>
                    <textarea id="btn-input" type="text" class="form-control input-sm chat_input" name="mensagem" placeholder="Digite a mensagem"></textarea>
                    <span class="input-group-btn">
                        <input type="hidden" name="enviar" value="mensagem"/>
                        <button type="submit" class="btn btn-success btn-sm" id="btn-chat">Enviar</button>
                    </span>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


</div>