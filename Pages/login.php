<?php
    include('../Includes/header.php');
    include('../Acoes/logar.php');   
?>

<body class='container bg-light'>
    <div class="card text-center p-5 mx-auto" style="width:50vw">
        <form action="login.php" method="POST">       
                <img class="rounded-circle" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    <h1 class="h3 mt-3 mb-3 font-weight-normal">Acesso ao Sistema</h1>
                    <p>Seja bem-vindo!</p>
                <div class="form-group col-8 mx-auto">
                    <input type="usuario" name="usuario" id="inputUsuario" class="form-control" placeholder="Usuário" required>
                </div>
                <div class="form-group col-8 mx-auto">
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                </div>
                
                <div class="mx-auto col-5 mb-1">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
                </div>
                <small><a href="cadastro.php">Cadastre-Se</a></small>
            </form>    
    </div>
</body>
<?php include('../Includes/footer.php')?>