<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once "nichos/head.php"; ?>
        <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css">
        <style type="text/css">
          #btn1{
            margin-top: 50px;
          }
          #conteudo{
            margin-top: -200px;
          }
        </style> 
    </head>
    <body style='background-image: url(img/fundoneutro.jpg);'>
        <header>
            <?php include_once "nichos/headerusr.php"; ?>
        </header>
        <main>
            <div class="row container">
              <div class="col s4">
                  <button id="btn1">Registar cartão</button>
              </div>
              <?php 
                    $sql = "SELECT ncart,nomecart,idusr FROM cardcreds WHERE idusr=1;";
                    $dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
                    echo "<div class='slider multiple-items col s8'>";
                    foreach($dados as $item){
                      echo "<div>
                            <a href='registros.php'>
                              <h3>{$item->nomecart}</h3>
                            </a>
                            <button class='btn2'><a href='editarcard.php?ncart=$item->ncart'>Editar</a></button> 
                            <a href='removercard.php?ncart=$item->ncart'><button>Excluir</button></a>
                      </div>";
                    }
                    echo "</div>";
              ?>
            </div>
            <div class="row col s12" id="conteudo"></div>
        </main>
        
        <footer class='page-footer white' style='border-top: 5px solid #005274;'>
            <?php include_once "nichos/footer.php"; ?>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <?php include_once "nichos/scripts.php"; ?>
        <script src="js/ajax.js"></script>
        <script type="text/javascript" src="http://kenwheeler.github.io/slick/slick/slick.js"></script>
        <script src="js/app.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
          });
        });
      </script>
    </body>
</html>