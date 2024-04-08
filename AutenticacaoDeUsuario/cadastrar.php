<?php
$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;

header("location:/")
?>