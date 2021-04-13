<?php
include('../Includes/variaveis.php');
include('../Classes/classCrud.php');
include('../Classes/classUsuario.php');
include('../Classes/classPassword.php');
include('../Classes/classImagem.php');

$crud = new classCrud();
$hash = new classPassword();
$imagem = new classImagem();
      
    //Evento botão Cadastrar Usuarios
    if (isset($_POST['btnCadastrar'])) {
        if ($usuario != '' && $senha1 != '' && $senha2 != '' && $foto['name'] != '') {
            if ($senha1 != $senha2) {
                echo("<script>swal('Senhas não Conferem')</script>");
            } else {
                $imagem->gravarFoto($foto);
                $crud->insertDB('usuarios', '?,?,?,?', array($email, $usuario, $hash->passwordHash($senha2), $imagem->gerarNome($foto)), 'email, usuario, senha, imagem');
                echo("<script>alert('Usuário Cadastrado')</script>");
                header("Location: login.php");
            }
        } else {
            echo("<script>alert('Preencher todos os campos')</script>");
        }
    }

    //Evento botão Publicar Comentários
    if (isset($_POST['btnPublicar'])) {
        if ($acao == 'Cadastrar') {
            if ($usuarioLogado != '' && $comentario != '') {
                $crud->insertDB('comentarios', '?,?,?,?', array(isset($_POST['anonimo']) ? 'anônimo' : $usuarioLogado, isset($_POST['anonimo']) ? 'anônimo' : $emailLogado, $data, $comentario), 'usuario, email, data, comentario');
                echo("<script>alert('Comentário Inserido')</script>");
            } else {
                echo("<script>alert('Preencher o comentário')</script>");
            }
        } else 
        {
            if ($usuarioLogado != '' && $comentario != '') {
                $crud->updateDB('comentarios', 'usuario = ?, email = ?, data = ?, comentario = ?', $idHidden, array($usuarioLogado, $emailLogado, $data, $comentario));
                echo("<script>alert('Comentário Editado')</script>");
            } else {
                echo("<script>alert('Preencher o comentário')</script>");
            }
        }
    }