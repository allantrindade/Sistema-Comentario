<?php 
    include('../Includes/header.php');
    include('../Acoes/cadastrar.php');
    session_start();
    if(empty($_SESSION['loggedin'])){
        header("Location: login.php");
        exit;
    }
?>
<body class="bg-light">
    <div class="container">
        <h1 class="text-info text-center p-3">Sistema Comentário</h1>
        <div class="row">
            <div class="col-md-12 mt-4">              
            </div>
            <div class="col-md-12 mt-2 text-right">               
                <small>Usuário Logado: <?=$_SESSION['loggedin']?>
                <a name="btnSair" class="btn btn-danger btn-sm" href="../Acoes/logout.php">Sair</a>   </small>                                
            </div>
        </div>
    </div>
</body>
<?php include('../Includes/footer.php')?>
