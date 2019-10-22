<?php
$valor1 = $_GET["v1"];
$valor2 = $_GET["v2"];
if($valor1 > $valor2){
    echo "$valor1 é maior que  $valor2";
}else{
    echo "$valor1 é menor que $valor2";
}
?>