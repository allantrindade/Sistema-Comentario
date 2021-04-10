<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$estado = isset($_POST['estado']) ? strtoupper($_POST['estado']) : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha1 = isset($_POST['senha1']) ? $_POST['senha1'] : '';
$senha2 = isset($_POST['senha2']) ? $_POST['senha2'] : '';
$rotas = isset($_GET['url']) ? $_GET['url'] : '';
?>