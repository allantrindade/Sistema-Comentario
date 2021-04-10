<?php
    include('../Includes/header.php');
    include('../Acoes/cadastrar.php');
?>

<body class='container bg-light'>
    <div class="card text-center p-5 mx-auto" style="width:50vw">
        <form action="cadastro.php" method="POST">       
                    <h1 class="h3 mt-3 mb-3 font-weight-normal">Cadastro de Usuário</h1>
                    <p>Seja bem-vindo!</p>
                <div class="form-group col-8 mx-auto">
                    <input type="usuario" name="usuario" class="form-control" placeholder="Usuário" required>
                </div>
                <div class="form-group col-8 mx-auto">
                    <input type="password" name="senha1" class="form-control" placeholder="Senha" required>
                </div>
                <div class="form-group col-8 mx-auto">
                    <input type="password" name="senha2" class="form-control" placeholder="Confirmar Senha" required>
                </div>
                <div class="row">
                    <div class="ml-auto col-3">
                        <button name="btnCadastrar" class="btn btn-dark btn-block" type="submit">Cadastrar</button>
                    </div>
                    <div class="mr-auto col-3">    
                        <a class="btn btn-secondary btn-block" href="login.php">Log in</a>
                    </div>
                </div>
            </form>    
    </div>
</body>
<?php include('../Includes/footer.php')?>