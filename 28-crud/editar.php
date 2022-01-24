<?php 
include_once 'php_action/db_connect.php';
if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($result);

}else {
    echo "Cadastro inexistente!";
}
?>
<?php require_once 'includes/header.php'; ?>
<div class="container">
    <h3 class="text-center title-red">Novo cliente</h3>
    <form id="formulario" class="form" action="php_action/update.php" method="POST">
        <div class="row">
                <div class="col-md-3">
                    <label class="label-text" for="nome">Nome Cliente: </label>
                    <input class="form-control" type="text" name="nome" placeholder="Insira o nome" value="<?php echo  $dados['nome'];?>">
                </div>
                <div class="col-md-3">
                    <label class="label-text" for="sobrenome">Sobrenome Cliente: </label>
                    <input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome do cliente" value="<?php echo  $dados['sobrenome'];?>">
                </div>
                <div class="col-md-4">
                    <label class="label-text" for="email">Email: </label>
                    <input class="form-control" type="email" name="email" placeholder="Insira o email" value="<?php echo  $dados['email'];?>">
                </div>
                <div class="col-md-2">
                    <label class="label-text" for="idade">Idade: </label>
                    <input class="form-control" type="number" name="idade" placeholder="Idade" value="<?php echo  $dados['idade'];?>">
                </div>
                <input type="hidden" name="id" value="<?php echo  $dados['id'];?>">
        </div>
        <button type="submit" name="editar" class="btn btn-success btn-form"><i style="margin-right: 6px;" class="bi bi-plus-lg"></i> Cadastrar</button>
        <a href="index.php" class="btn btn-info btn-form"><i style="margin-right: 6px;" class="bi bi-list-stars"></i> Lista de clientes</a>
    </form>
    
</div>
<?php require_once 'includes/footer.php'; ?>