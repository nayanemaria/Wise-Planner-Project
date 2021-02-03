formData = new FormData();

document.getElementById("btnEnviar").onclick = function(){
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");
    var csenha = document.getElementById("csenha");
    if((nome.value != "" && email.value != "") && (senha.value != "" && csenha.value != "")){
        if(senha.value==csenha.value){
            formData.append("nome", nome.value);
            formData.append("email", email.value);
            formData.append("senha", senha.value);
            formData.append("csenha", csenha.value);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState===4 && xmlhttp.status===200){
                    document.getElementById("retorno").innerHTML= xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST","crud/registro.php",true);
            xmlhttp.send(formData);
        }else{
            alert("Senhas não coincidem!");
        }
    }else{
        alert("Informe todos os campos");
    }
};