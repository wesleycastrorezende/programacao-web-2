<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="sexo"></label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminina</option>
        </select>
  
        <label for="idade"></label>
        <input type="number" name="idade" id="idade" placeholder="Idade">

        <label for="peso"></label>
        <input type="number" name="peso" id="peso" placeholder="Peso">

        <label for="altura"></label>
        <input type="number" name="altura" id="altura" placeholder="Altura">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>