<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once "nichos/head.php"; ?> 
    </head>
    <body style='background-image: url(img/fundoneutro.jpg);'>
        <header>
            <?php include_once "nichos/headerusr.php"; 

                if($_GET['ncart'] != null){
                    $sql = "SELECT * FROM cardcreds WHERE ncart = '{$_GET['ncart']}';";
                    $comando = $conexao->getCon()->prepare($consulta);
                    $comando->bindParam("ncart", $_GET['ncart']);
                    $comando->execute();
                    $objeto = $comando->fetch(PDO::FETCH_OBJ);
                    
                }else{
                  header("Location: cartoescredito.php");
                }
                ?>
        </header>
        <main>
            <div class='section no-pad-bot'>
                <div class='row container' style='margin-top: 4%;'>
                    <div class='col m4 s12 center'>
                        <img class='circle responsive-img white' src='img/coruja.png' style='width: 30%;height: 30%;border: 3px solid #005274;'/>
                        <h5>Olá! Seja bem vindo(a) <u><?php echo $nome; ?></u>.</h5>
                        <a href="cartoescredito.php" class='waves-effect waves-light btn white colorpri resetbtn'>Voltar</a>
                        <p style='margin-bottom: 20px;'>Segue abaixo os seus últimos registros.</p>
                        <div class="row">
                            <div class="col s12">
                              <div class='card white darken-1' style='border-top-left-radius: 15px;border-top-right-radius: 15px;border: 1px solid #005274;'>
                                <div class="card-content white-text">
                                  <span class="card-title grey-text text-darken-4">Últimos recursos registros</span>
                                  <div class='divider'></div>
                                  <table class='centered striped white black-text' style='border: 1px solid #005274;'>
                                    <thead>
                                      <tr>
                                          <th style='border-right: 1px solid #005274;border-bottom: 1px solid #005274;'>Tipo</th>
                                          <th style='border-right: 1px solid #005274;border-bottom: 1px solid #005274;'>Transação</th>
                                          <th style='border-bottom: 1px solid #005274;'>Valor</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr>
                                        <td>Banco</td>
                                        <td class='green-text'><b>+</b></td>
                                        <td>R$ 87.00</td>
                                      </tr>
                                      <tr>
                                        <td>Cartão de Crédito</td>
                                        <td class='orange-text'><b>1/10</b></td>
                                        <td>R$ 10.99</td>
                                      </tr>
                                      <tr>
                                        <td>Carteira</td>
                                        <td class='red-text'><b>-</b></td>
                                        <td>R$ 50.00</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class='col m8 s12'>
                      <div class="card-panel" style='border: 1px solid #005274;'>
                        <div class='row'>
                          <?php
                              echo '
                              <div class="card-panel" style="border: 1px solid #005274;">
                                <div class="row">
                                  <div class="col s12">
                                          <table class="responsive-table">
                                            <thead>
                                              <tr>
                                                  <th>Nome Cartão</th>
                                                  <th>Nº Cartão</th>
                                                  <th>Data de Vencimento</th>
                                                  <th>Limite Total</th>
                                                  <th>Limite Disponível</th>
                                              </tr>
                                            </thead>
                                            <tbody>';
                              foreach ($dados as $item) {
                                echo "      <tr>
                                                <td>$item->nomecart</td>
                                                <td>$item->ncart</td>
                                                <td>$item->datavenc</td>
                                                <td>$item->limitetotal</td>
                                                 <td>$item->limitedispo</td>
                                              </tr>";
                              }
                              echo "
                                            </tbody>
                                          </table>
                                        </div>
                                </div>
                              </div>
                              ";
                              ?>


                           <form class="col s12" method="post" action='crud/registcreds.php'>
                              <div class="input-field col s12"> 
                              <input type="text" name='limitetotal' value='<?= $objeto->limitetotal; ?>' required>
                              <label for="limitetotal">Edite o Limite Total do cartão <?= $objeto->nomecart; ?></label>
                              </div>
                              <div class="input-field col s12">
                              <label for="idusr"></label>
                              <input name='idusr' id="idusr" type="hidden" value='<?= $objeto->idusr; ?>' required>
                              </div>
                              <div class="input-field col s12">
                                <input type="hidden" name='ncart' value='<?= $objeto->ncart; ?>' required>
                                <label for="ncart"></label>
                              </div>
                              <button id="btn2" class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class='page-footer white' style='border-top: 5px solid #005274;'>
            <?php include_once "nichos/footer.php"; ?>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <?php include_once "nichos/scripts.php"; ?>
    </body>
</html>    