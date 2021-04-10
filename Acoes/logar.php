<?php
    include('../Classes/classUsuario.php');
    include('../Includes/variaveis.php');
    include('../Classes/classPassword.php');
    $u = new classUsuario();


    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        
        $usuario = addslashes($_POST['usuario']);
        $senha = addslashes($_POST['senha']);
        if($u->login($usuario, $senha) == true) {
                header("Location: index.php");
        } else {
                echo "<script>alert('Usuário ou Senha incorretos!')</script>";
        }
    } 
?>