<?php
include('../Classes/classCrud.php');

$crud = new classCrud();

$idHidden = isset($_GET['id']) ? $_GET['id'] : "";

if ($idHidden != '') {
    $crud->deleteDB('comentarios', '?', array($idHidden));
    header("Location: ../Pages/index.php");
} else {
    echo('Preencher o campo id para excluir');
}