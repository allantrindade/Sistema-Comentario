<?php
    $crud = new classCrud();
    $result = $crud->selectDB('*', 'comentarios', 'ORDER BY id desc', array());               
     //   if (!empty($result)) {
            while ($fetch = $result->fetch(PDO::FETCH_OBJ)) {
                $usuario = $crud->selectDB('imagem', 'usuarios', "WHERE usuario ='{$fetch->usuario}'", array())->fetch(PDO::FETCH_OBJ);       
                ?>
        <div class="card mb-2">
        <div class="row no-gutters">
        <div class="col-md-2">
            <img class="img-thumbnail rounded-circle" style="width: 200px; height: 130px;" alt="Usuário" src="../Images/Usuarios/<?php if (!empty($usuario)) {echo $usuario->imagem;} else {echo 'anonimo.jpg';}?>"/>
        </div>
        <div class="col-md-10">
            <div class="card-body p-2">
                <h5 class="card-title mb-0 font-weight-normal"><?=strip_tags($fetch->id)?> - <?=strip_tags($fetch->usuario)?></h5>
                <p class="card-subtitle mb-1 text-muted"><small><?=$fetch->email?></small></p>
                <p class="card-text font-weight-light"><?=strip_tags($fetch->comentario)?></p>
                <p class="card-text"><small class="text-muted"><?=strip_tags(date('d/m/Y H:i', $fetch->data))?></small>
                <span class="float-right mr-2"><a href='<?php echo "../Acoes/deletar.php?id={$fetch->id}"?>'><img src="../Images/Icones/deletar.png" title="Deletar" alt="Deletar"></a></span>
                <span class="float-right mr-3"><a href='<?php echo "../Pages/index.php?id={$fetch->id}"?>'><img src="../Images/Icones/editar.png" title="Editar" alt="Editar"></a></span></span>
                </p>
            </div>
        </div>
        </div>
        </div>   
    <?php
    echo ($result);
    }
//}
//else {
    
    ?>
        <!-- <p class="card-text text-center">Não temos comentários recentes !</p> -->
    <?php
        //}
    ?>