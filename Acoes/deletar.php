<?php
include('../Classes/classCrud.php');

$crud = new classCrud();

$idHidden = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

if ($idHidden != '') {
    $crud->deleteDB('comentarios', '?', array($idHidden));
    header("Location: ../Pages/index.php");
} else {
    echo('Preencher o campo id para excluir');
}