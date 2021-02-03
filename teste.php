<?php
function encripta($senha,$email){
$cripto = crypt($senha,$email);
$senha = base64_encode($cripto);
return $senha;
}
$var = encripta("juliane","email");
echo $var;
function encripta2($senha,$email){
$cripto = crypt($senha,$email);
$senha = base64_encode($cripto);
return $senha;
}
$var2 = encripta("kkk","jeno@lee.com");
echo $var2;
?>