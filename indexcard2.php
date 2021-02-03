<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usando Ajax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="icon" href="icone.png" type="image/x-icon" />
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
  <body>
    <div class="row container">
      <div class="col s4">
          <button id="btn1">Registar cartão</button>
      </div>
      <?php 
            require_once("crud/Conexao.php");
            $conexao = new Conexao();
            $sql = "SELECT ncart,nomecart,idusr FROM cardcreds WHERE idusr=1;";
            $dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
            echo "<div class='slider multiple-items col s8'>";
            foreach($dados as $item){
              echo "<div>
              			<a href='registros.php'>
              				<h3>{$item->nomecart}</h3>
              			</a>
              			<button id='btn2'><a href='editarcard.php?ncart=$item->ncart'>Editar</a></button> 
              			<a href='removercard.php?ncart=$item->ncart'><button>Excluir</button></a>
              </div>";
            }
            echo "</div>";
      ?>

         <div class="row col s12" id="conteudo"></div>
         <div class="row container col s12">
    </div>
    <script src="js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
