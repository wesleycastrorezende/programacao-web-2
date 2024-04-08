
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            
        }
    </style>
</head>
<body>
<?php
// Obter idade
$idade = $_REQUEST['idade'];
$fmc = 0;


if(is_numeric($idade)and $idade > 0 and $idade < 150){
    // Calcular a FM
    $fcm = 220 - $idade;
    echo "<p>Sua frequencia cardiaca  máxima é de $fmc</p>";
}
else{
    echo"<p>idade inválida</p>";
}
?>

<a href="index.php"> Voltar</a>

</body>
</html>