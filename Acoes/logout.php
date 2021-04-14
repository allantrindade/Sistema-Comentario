<?php
    include('../Classes/classUsuario.php');
    $u = new classUsuario();

    if ($u->logout()) {
        echo "<script>alert('Logout feito com sucesso');window.location.href='../Pages/login.php'</script>";   
    }
?>
    