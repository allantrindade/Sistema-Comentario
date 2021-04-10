<?php
include('../Includes/variaveis.php');
include('../Classes/classUsuario.php');
include('../Classes/classPassword.php');

$hash = new classPassword();

if (isset($_POST['btnSalvar'])) {
    if ($nome != '' && $email != '' && $cidade != '' && $estado != '') {
        $crud->insertDB('clientes','?,?,?,?',array($nome, $email, $cidade, $estado),'nome, email, cidade, estado');
        echo("<script>alert('Cliente Inserido')</script>");
    } else {
        echo("<script>alert('Preencher todos os campos')</script>");
    }
} else if (isset($_POST['btnEditar'])) {
    if ($nome != '' && $email != '' && $cidade != '' && $estado != '' && $id != '') {
        $crud->updateDB('clientes', 'nome = ?, email = ?, cidade = ?, estado = ?', $id, array($nome, $email, $cidade, $estado));
        echo("<script>alert('Cliente Atualizado')</script>");
    } else {
        echo("<script>alert('Preencher todos os campos')</script>");
    }
} else if (isset($_POST['btnDeletar'])) {
    if ($id != '') {
        $crud->deleteDB('clientes', '?', array($id));
        echo("<script>alert('Cliente Excluido')</script>");
    } else {
        echo("<script>alert('Preencher o campo id para excluir')</script>");
    }
}   else if (isset($_POST['btnCadastrar'])) {
    if ($usuario != '' && $senha1 != '' && $senha2 != '') {
        if($senha1 != $senha2){
            echo("<script>alert('Senhas não Conferem')</script>");
        } else {
            $crud->insertDB('usuarios', '?,?', array($usuario, $hash->passwordHash($senha2)), 'usuario, senha');
            echo("<script>alert('Usuário Cadastrado')</script>");
        }
    } else {
        echo("<script>alert('Preencher todos os campos')</script>");
    }
}