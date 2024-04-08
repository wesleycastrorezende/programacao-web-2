<?php
// obter dadaos input cujo  nome = "pokemon" de um form  de tipo GET
$pokemon = $_GET ['pokemon'];

// variavel imagem  recebe a foto "errou.png"
$nomeimagem = "errou.jpg";

// se o nome que ele enviara for correto
if ($pokemon == "Clefairy"){
    //imprimir acerto
    echo "<h1> acertou </h1>";
    $nomeimagem = "pokemon.webp";
}
else{
    // imprimir erro
    echo "<h1> errou </h1>";
}

echo"<img src=\"$nomeimagem\">";

?>

<p>
    <a href="/"> Tentar novamente </a>
</p>