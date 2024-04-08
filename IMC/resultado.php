<?php
session_start();
$nome = $_REQUEST['nome'];
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$imc = $peso/($altura * $altura * 0.0001);
if($imc <=18.5){
    echo("Abaixo do peso normal");
}
if($imc <=24.9 && $imc >18.5){
    echo("Peso ideal");
}
if($imc >24.9 && $imc <=29.0){
    echo("Levemente cima do peso( Ou seja: Você esta gostoso!)");
}
if($imc >29.0 && $imc <=34.9){
    echo("Obesidade grau 1");
}
if($imc >34.9 && $imc<=39.9){
   echo("obesidade grau 2");
}
if($imc >=40)
   echo("Obesidade grau 3 (MÓRBIDA)");
    $imc = number_format($imc, 2,".","");
echo "<h1>$nome, seu indice de massa corporal é de $$imc </h1>";
?>

<a href="index.php"> Voltar</a>
