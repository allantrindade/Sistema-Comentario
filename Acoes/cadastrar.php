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
                echo("<script>alert('Senhas não Conferem')</script>");
            } else {
                $imagem->gravarFoto($foto);
                $crud->insertDB('usuarios', '?,?,?,?', array($email, $usuario, $hash->passwordHash($senha2), $imagem->gerarNome($foto)), 'email, usuario, senha, imagem');
                echo("<script>alert('Usuário Cadastrado');window.location
                .href='login.php'</script>");
            }
        } else {
            echo("<script>alert('Preencher todos os campos')</script>");
        }
    }