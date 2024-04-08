<?php
$sexo = $_REQUEST['sexo'];
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$idade = $_REQUEST['idade'];
if($sexo == "M"){
    $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
}
else{
    $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 161;

}
echo"Sua Taxa Metabolica Basal é de $tmb";
?>

<a href="index.php">Voltar</a>