<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$usuario = $_SESSION['usuario'] ?? '' ;
$senha = $_SESSION['senha'] ?? '' ;
?>

    <h1>Cadastro de Usuário</h1>
    <br>
    <form action="cadastrar.php">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario"
        value="<?=$usuario?>" >
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"
        value="<?$senha?>" >
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>