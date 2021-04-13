<?php

include('../Includes/variaveis.php');
include('../Classes/classCrud.php');

$crud = new classCrud();
    //Evento botão Publicar Comentários
    if (isset($_POST['btnPublicar'])) {
        if ($acao == 'Publicar') {
            if ($usuarioLogado != '' && $comentario != '') {
                $crud->insertDB('comentarios', '?,?,?,?', array(isset($_POST['anonimo']) ? 'anônimo' : $usuarioLogado, isset($_POST['anonimo']) ? 'anônimo' : $emailLogado, $data, $comentario), 'usuario, email, data, comentario');
                echo("<script>alert('Comentário Inserido')</script>");
            } else {
                echo("<script>alert('Preencher o comentário')</script>");
            }
        } else 
        {
            if ($usuarioLogado != '' && $comentario != '') {
                $crud->updateDB('comentarios', 'usuario = ?, email = ?, data = ?, comentario = ?', $idHidden, array(isset($_POST['anonimo']) ? 'anônimo' : $usuarioLogado, isset($_POST['anonimo']) ? 'anônimo' : $emailLogado, $data, $comentario));
                echo("<script>alert('Comentário Editado')</script>");
            } else {
                echo("<script>alert('Preencher o comentário')</script>");
            }
        }
    }