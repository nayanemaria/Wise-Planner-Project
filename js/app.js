var btnA = document.getElementById("btn1");
//var btnC = document.getElementById("btn2");
var reg = document.getElementById("registros");
var conteudo  = document.getElementById("conteudo");
btnA.onclick = function(){
  requisitarArquivo("crud/form.php",conteudo);
};
/*btnC.onclick = function(){
  requisitarArquivo("crud/editarcard.php",conteudo);
};*/
reg.onclick = function(){
  requisitarArquivo("crud/registros.php",conteudo);
};
$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});