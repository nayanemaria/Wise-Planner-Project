function iniciarAjax(){
	var objetoAjax = false; // Variável que recebe obj
	if(window.XMLHttpRequest){ // Firefox e demais Browsers
		objetoAjax = new XMLHttpRequest();
	}else if(window.ActiveXObject){ // IE 9 ou >
		objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
		if(!objetoAjax){ // IE 8 ou < 
			objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return objetoAjax;
}
function mostrarResposta(elemento,ajax){
	if(ajax.readyState == 4){ // Condição baseada no estado da REQUISIÇÃO 
		if(ajax.status == 200 || ajax.status == 304){ // Condição baseada no estado da RESPOSTA
			elemento.innerHTML = ajax.responseText; 
		}else{
			alert("Problema de comunicação");
		}
	}
}
//Loader
function carregando(container){ // Recebe Elemento como argumento
	// Verifica se elemento possui nós filhos
	while(container.hasChildNodes()){ 
		// Remove último elemento filho
		container.removeChild(container.lastChild);
	}
	// Cria elemento IMG
	var imagem = document.createElement("img");
	// Define os atributos
	imagem.setAttribute("src","loader.gif");
	imagem.setAttribute("alt","Carregando...");
	// Adiciona imagem como nó filho do elemento
	container.appendChild(imagem);
}
function requisitarArquivo(arquivo,elemento){
	var ajax = iniciarAjax(); // Inicia Ajax	
	if(ajax){ // Verifica se Ajax está ativo
		carregando(elemento);
		ajax.onreadystatechange = function(){ // Evento de mudança de estado
		mostrarResposta(elemento,ajax); // Execução da resposta da requisição
		};
		ajax.open("GET", arquivo, true); // Define a requisição
		ajax.send(null); // Envia requisição
		return true;
	}else{
		return false;
	}
	
}
