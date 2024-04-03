<?php
//Digite seu nome:
$nome = "Leonardo";
//Digite seu sexo(M para Masculino e F para feminino):
$sexo = "M";
//Digite sua idade:
$idade = 24;
if($sexo == "F" && $idade<25){
    echo "Olá ".$nome.", sua situação é: ACEITA";
}else{
    echo "Olá ".$nome.", sua situação é: NÃO ACEITA";
}
?>