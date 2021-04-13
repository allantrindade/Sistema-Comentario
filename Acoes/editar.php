<?php
include('../Classes/classCrud.php');
include('../Includes/variaveis.php');

$crud = new classCrud();

$idHidden = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

if ($idHidden != '') {
    var_dump($crud->updateDB('comentarios', 'usuario = ?, email = ?, data = ?, comentario = ?', $idHidden, array($usuario, $email, $data, $comentario)));
    exit;
    header("Location: ../Pages/index.php");
} else {
    echo("<script>alert('Preencher todos os campos')</script>");
}