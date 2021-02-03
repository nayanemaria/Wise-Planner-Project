<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once "nichos/head.php"; ?>
        <script src='Chart.bundle.js'></script>
    </head>
    <body style='background-image: url(img/fundoneutro.jpg);'>
        <header>
            <?php include_once "nichos/headerusr.php"; ?>
        </header>
        <main>
            <div class='section no-pad-bot'>
                <div class='row container' style='margin-top: 4%;'>
                    <div class='col s4'>
                        <div class="card white" style="border: 1px solid #005274;">
                            <div class="card-content">
                              <span class="card-title">Salve o relatório dos seus ganhos/gastos</span>
                              <p>Selecione que tipo de relatório quer salvar(Carteira, Banco ou Cartão de Crédito) e após isto selecione o seu período(Semanal, Mensal, Semestral) e será gerado um pdf.</p>
                              <input name="usr" type="hidden" value='usr' />
                              <p class="colorpri">Tipo de relatório:</p>
                              <p>
                                  <label>
                                    <input id="group1" name="group1" type="radio" value='1' />
                                    <span>Carteira</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input id="group1" name="group1" type="radio" value='2' />
                                    <span>Banco</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input id="group1" name="group1" type="radio" value='3' />
                                    <span>Cartão de Crédito</span>
                                  </label>
                                </p>
                              <p class="colorpri">Período:</p>
                                <p>
                                  <label>
                                    <input id="group2" name="group2" type="radio" value='1' />
                                    <span>Semanal (Últimos 7 dias)</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input id="group2" name="group2" type="radio" value='2' />
                                    <span>Mensal (Últimos 30 dias)</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input id="group2" name="group2" type="radio" value='3' />
                                    <span>Semestral (Últimos 180 dias)</span>
                                  </label>
                                </p>
                            </div>
                            <div class='row center'>
                                <a class='waves-effect waves-light btn white colorpri resetbtn' id='btnGerar'><i class='material-icons right'>send</i>Gerar</a>
                            </div>
                            <script>
                            formData = new FormData();

                            document.getElementById("btnGerar").onclick = function(){
                                var tipoRel = document.getElementById("group1");
                                var Periodo = document.getElementById("group2");
                                if(tipoRel.value != "" && Periodo.value != ""){
                                    formData.append("tiporelatorio", tipoRel.value);
                                    formData.append("periodo", Periodo.value);
                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange=function(){
                                        if(xmlhttp.readyState===4 && xmlhttp.status===200){
                                            document.getElementById("retorno").innerHTML= xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("POST","3recebe.php",true);
                                    xmlhttp.send(formData);
                                }else{
                                    alert("Informe todos os campos");
                                }
                            }
                            </script>
                          </div>
                    </div>
                    <div class='col s8'>
                        <div class="card white" id="retorno" style="border: 1px solid #005274;">
                            <div class="card-content">
                              <span class="card-title">Nenhum relatório foi gerado ainda</span>
                          </div>
                        </div>
                    </div>
                    <div class='col s12'>
                        <div class="card white" style="border: 1px solid #005274;">
                            <div class="card-content">
                                <span class="card-title">Últimos relatórios de <b>Carteira</b> registrados</span>
                              <p>Selecione que tipo de relatório quer salvar(Carteira, Banco ou Cartão de Crédito) e após isto selecione o seu período(Semanal, Mensal, Semestral) e será gerado um pdf.</p>
                            </div>
                            <div class="card-action">
                              <a href="#">This is a link</a>
                              <a href="#">This is a link</a>
                            </div>
                          </div>
                    </div>
                    <div class='col s12'>
                        <div class="card white" style="border: 1px solid #005274;">
                            <div class="card-content">
                              <span class="card-title">Últimos relatórios de <b>Banco</b> registrados</span>
                              <p>Selecione que tipo de relatório quer salvar(Carteira, Banco ou Cartão de Crédito) e após isto selecione o seu período(Semanal 7 dias, Mensal 30 dias, Semestral 180 dias) e será gerado um pdf.</p>
                            </div>
                            <div class="card-action">
                              <a href="#">This is a link</a>
                              <a href="#">This is a link</a>
                            </div>
                          </div>
                    </div>
                    <div class='col s12'>
                        <div class="card white" style="border: 1px solid #005274;">
                            <div class="card-content">
                              <span class="card-title">Últimos relatórios de <b>Cartão de Crédito</b> registrados</span>
                              <p>Selecione que tipo de relatório quer salvar(Carteira, Banco ou Cartão de Crédito) e após isto selecione o seu período(Semanal 7 dias, Mensal 30 dias, Semestral 180 dias) e será gerado um pdf.</p>
                            </div>
                            <div class="card-action">
                              <a href="#">This is a link</a>
                              <a href="#">This is a link</a>
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
        <script>
	//grafico semanal
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
   type: 'line',
				data: {
					labels: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
					datasets: [{
						label: 'Ganhos',
						backgroundColor: 'rgb(0, 131, 143)',
    					borderColor: 'rgb(0, 131, 143)',
						data: [100, 200, 300, 400,500,600,700,800],
						fill: false,
					}, {
						label: 'Gastos',
						fill: false,
						backgroundColor: 'rgb(245, 127, 23)',
    					borderColor: 'rgb(245, 127, 23)',
						data: [5, 10, 15, 20, 25, 30, 35, 40, 45,50],
					}]
				},
    options: {
    	responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
//grafico mensal
var ctx = document.getElementById('myChart1');
var myChart1 = new Chart(ctx, {
   type: 'line',
        data: {
          labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'],
          datasets: [{
            label: 'Ganhos',
            backgroundColor: 'rgb(0, 131, 143)',
              borderColor: 'rgb(0, 131, 143)',
            data: [10, 20, 30, 46, 5, 60, 70, 80, 90,100],
            fill: false,
          }, {
            label: 'Gastos',
            fill: false,
            backgroundColor: 'rgb(245, 127, 23)',
              borderColor: 'rgb(245, 127, 23)',
            data: [5, 10, 15, 20, 25, 30, 35, 40, 45,50],
          }]
        },
    options: {
      responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
//grafico semestral
var ctx = document.getElementById('myChart2');
var myChart2 = new Chart(ctx, {
   type: 'line',
				data: {
					labels: ['Mês 1', 'Mês 2', 'Mês 3', 'Mês 4', 'Mês 5', 'Mês 6'],
					datasets: [{
						label: 'Ganhos',
						backgroundColor: 'rgb(0, 131, 143)',
    					borderColor: 'rgb(0, 131, 143)',
						data: [10, 20, 30, 40, 50, 60, 70, 80, 90,100],
						fill: false,
					}, {
						label: 'Gastos',
						fill: false,
						backgroundColor: 'rgb(245, 127, 23)',
    					borderColor: 'rgb(245, 127, 23)',
						data: [5, 10, 15, 20, 25, 30, 35, 40, 45,50],
					}]
				},
    options: {
    	responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
    </body>
</html>    