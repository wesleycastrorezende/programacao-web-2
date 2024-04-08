<?php
$nomedevedor = $_REQUEST['nomedevedor'];
$cpfdevedor = $_REQUEST['CPFdevedor'];
$endereco = $_REQUEST['endereco'];
$nomecredor = $_REQUEST['nomecredor'];
$cpfcredor = $_REQUEST['CPFcredor'];
$valordivida = $_REQUEST['valordivida'];
$datavencimento = $_REQUEST['datavencimento'];
echo "<h1> NOTA PROMISSÓRIA</h1>";
echo"<p>DATA DE VENCIMENTO: $datavencimento</p>";
echo"<p>Eu $nomedevedor,, inscrito no CPF sob nº$cpfdevedor
residente e domiciliado no endereço $endereco,
pagarei pela presente NOTA PROMISSÓRIA. à $nomecredor ,
inscrito no CPF,  sob nº $cpfcredor valor de $valordivida com vencimento em $datavencimento.
</p>";
?>

<a href="index.php">Gerar nova nota</a>