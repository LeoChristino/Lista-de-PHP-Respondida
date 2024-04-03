<?php
$num1 = 10;
$num2 = 8;
$soma = $num1+$num2;
if($soma>20){
    $soma = $soma+8;
    echo("A soma dos números ".$num1." e ".$num2." + 8 é igual a ". $soma."!");
}else{
    $soma = $soma-5;
    echo("A soma dos números ".$num1." e ".$num2." - 5 é igual a ". $soma."!");
}
?>