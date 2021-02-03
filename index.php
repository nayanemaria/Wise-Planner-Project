<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once "nichos/head.php"; ?>
    </head>
    <body style='background-image: url(img/fundo.jpg);background-repeat: round;'>
        <header>
            <?php include_once "nichos/header.php"; ?>
        </header>
        <main>
            <div class='section no-pad-bot' id='index-banner'>
                <div class='row container'>
                    <div class='col m8 s12 center'>
                        <img class='circle responsive-img' src='img/wiseplanner.png' style='width: 40%;height: 40%;border: 10px dashed #F37020;'>
                        <h4 class='grey-text text-lighten-4'>Buscamos o melhor para você</h4>
                    </div>
                    <div class='col m4 s12 logres white'>
                        <div class='col s12'>
                          <ul class='tabs'>
                            <li class='tab col s6'><a class='active colorpri' href='#login'>Login</a></li>
                            <li class='tab col s6'><a class='colorpri' href='#registro'>Registrar-se</a></li>
                          </ul>
                        </div>
                      <form method="post" action="crud/login.php">
                          <div id='login' class='col s12 container'>
                              <div class='row' style='margin-top: 25px;'>
                                  <div class='input-field col s12'>
                                     <i class='material-icons prefix' style='color: #F37020;'>account_circle</i>
                                    <input id='email-login' type='email' class='validate' name="emaillogin">
                                    <label for='email'>Email</label>
                                    <span class='helper-text' data-error='e-mail inválido' data-success='e-mail válido'>Digite um e-mail válido</span>
                                  </div>
                              </div>
                              <div class='row'>
                                  <div class='input-field col s12'>
                                    <i class='material-icons prefix' style='color: #F37020;'>https</i>
                                    <input id='password' type='password' class='validate' name="senhalogin">
                                    <label for='password'>Senha</label>
                                  </div>
                              </div>
                              <div class='row center'>
                              	<button class="waves-effect waves-light btn white colorpri resetbtn" type="submit" name="action">Entrar
								<i class="material-icons right">send</i>
							</button>
                                  <p class='grey-text' style='margin-top: 30px;'><i class='tiny material-icons'>warning</i> Tome cuidado com seus dados pessoais, nenhum funcionário da Wise Planner irá pedir sua senha.</p>
                              </div>
                          </div>
                      </form>
                        <div id='registro' class='col s12'>
                            <div class='row'>
                                <div class='input-field col s12'>
                                  <i class='material-icons prefix grey-text text-darken-4'>account_circle</i>
                                  <input id='nome' type='text' class='validate' required>
                                  <label for='icon_prefix'>Nome</label>
                                </div>
                                <div class='input-field col s12'>
                                   <i class='material-icons prefix grey-text text-darken-4'>email</i>
                                  <input id='email' type='email' class='validate' required>
                                  <label for='email'>Email</label>
                                  <span class='helper-text' data-error='e-mail inválido' data-success='e-mail válido'>Digite um e-mail válido</span>
                                </div>
                                <div class='input-field col s12'>
                                  <i class='material-icons prefix grey-text text-darken-4'>https</i>
                                  <input id='senha' type='password' class='validate' required>
                                  <label for='password'>Senha</label>
                                </div>
                                <div class='input-field col s12'>
                                  <i class='material-icons prefix grey-text text-darken-4'>https</i>
                                  <input id='csenha' type='password' class='validate' required>
                                  <label for='password'>Confirmar senha</label>
                                </div>
                            </div>
                            <div class='row center'>
                                <a class='waves-effect waves-light btn white colorpri resetbtn' id="btnEnviar"><i class='material-icons right'>send</i>Concluir registro</a>
                            </div>
                        </div>
                        <div id='retorno'></div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class='page-footer white' style='border-top: 5px solid #005274;'>
            <?php include_once "nichos/footer.php"; ?>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <?php include_once "nichos/scripts.php"; ?>
        <script type='text/javascript' src='crud/regscript.js'></script>
    </body>
</html>    