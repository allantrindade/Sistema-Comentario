<?php
include('../Classes/classCrud.php');

$crud = new classCrud();

$idHidden = isset($_GET['id']) ? $_GET['id'] : "";
$userHidden = isset($_GET['user']) ? $_GET['user'] : "";

session_start();
$usuarioLogado = $_SESSION['loggedin'];


if (($idHidden != '')) {
    if ($usuarioLogado == $userHidden || $userHidden == 'anônimo') {
        $crud->deleteDB('comentarios', '?', array($idHidden));
        echo("<script>alert('Comentário Excluido')</script>");
        header("Location: ../Pages/index.php");
    } else {
        echo("<script>alert('Você pode excluir somente o seu comentário')</script>");
    }
} else {
    echo("<script>alert('Preencher o campo id para excluir')</script>");
}