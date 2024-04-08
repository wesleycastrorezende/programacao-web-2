<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pagina pública</p>
    <nav>
        <a href="registrar.php">Registrar</a>
        <br>
        <a href="cadastrar.php">Area Restrita</a>
    </nav>

    <?php
    session_start();
    var_dump($_SESSION);
    ?>
</body>
</html>