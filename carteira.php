<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once 'nichos/head.php'; ?>
    </head>
    <body style='background-image: url(img/fundoneutro.jpg);'>
        <header>
            <?php include_once 'nichos/headerusr.php'; ?>
        </header>
        <main>
            <div class='section no-pad-bot'>
                <div class='row container' style='margin-top: 4%;'>
                    <div class='col m4 s12 center'>
                        <div class='row'>
                            <div class='col s12'>
                              <div class='card white darken-1' style='border-top-left-radius: 15px;border-top-right-radius: 15px;border: 1px solid #005274;'>
                                <div class='card-content white-text'>
                                  <span class='card-title grey-text text-darken-4'>Registrar gastos/ganhos</span>
                                  <div class='row'>
                                      <input id='usr' type='hidden' value=''>
                                      <div class='input-field col s12'>
                                        <input id='icon_prefix' type='text' placeholder='Compras farmacêuticas, alimentícias, ganhos extras'>
                                        <label for='icon_prefix'>Descrição</label>
                                        <span class='helper-text'>Precisamos deste detalhe para que possa ser identificado</span>
                                      </div>
                                      <div class='input-field col s12'><p class='colorpri left'>Tipo de registro:</p></div>
                                      <div class='input-field col s6'>
                                         <p>
                                            <label>
                                              <input name='group1' type='radio' value='ganho' checked />
                                              <span>Ganho</span>
                                            </label>
                                          </p>
                                      </div>
                                      <div class='input-field col s6'>
                                          <p>
                                            <label>
                                              <input name='group1' type='radio' value='gasto' checked />
                                              <span>Gasto</span>
                                            </label>
                                          </p>
                                      </div>
                                      <div class='input-field col s12'>
                                        <i class='material-icons prefix grey-text text-darken-4'>attach_money</i>
                                        <input id='password1' type='text' class='money' placeholder='Digite somente números'>
                                        <span class='helper-text red-text text-darken-4'>Não se esqueça de acrescentar zeros para ficar no formato do valor desejado</span>
                                        <label for='password'>Valor</label>
                                      </div>
                                      <div class='row center'>
                                            <a class='waves-effect waves-light btn white colorpri resetbtn'><i class='material-icons right'>send</i>Registrar</a>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class='col m8 s12'>
                      <div class='card-panel' style='border-top-left-radius: 15px;border-top-right-radius: 15px;border: 1px solid #005274;'>
                        <div class='row'>
                            <div class='col s12'>
                              <h5 class='grey-text text-darken-4 center'>Carteira</h5>
                             <table class="centered striped">
                                <thead>
                                  <tr>
                                      <th>Descrição</th>
                                      <th>Tipo</th>
                                      <th>Valor</th>
                                      <th>Remover</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                  </tr>
                                  <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                    <td>$3.76</td>
                                  </tr>
                                  <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                    <td>$7.00</td>
                                  </tr>
                                </tbody>
                                 <thead>
                                  <tr>
                                      <th>Total</th>
                                      <th></th>
                                      <th>x</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class='page-footer white' style='border-top: 5px solid #005274;'>
            <?php include_once 'nichos/footer.php'; ?>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <?php include_once 'nichos/scripts.php'; ?>
    </body>
</html>    