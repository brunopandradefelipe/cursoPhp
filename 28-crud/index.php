<?php
session_start();
include_once 'php_action/db_connect.php';
$sql = "SELECT * from clientes order by id desc limit 100;";
$result =  mysqli_query($connect, $sql);
?>

<?php require_once 'includes/header.php'; ?>

<div class="container">

    <h1 class="text-center title-red">TABELA DE CLIENTES</h3>

        <table class="table table-responsive table-bordered table-striped ">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th width="12%">Gerenciar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($dados = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td class="gerenciar"><a name="editar" href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-primary btn-circle"><i class="bi bi-pencil-fill"></i></a>
                            <button type="button" class="btn btn-danger btn-circle" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $dados['id']; ?>"><i class="bi bi-trash-fill"></i></button>
                        </td>
                        <div class="modal fade" id="exampleModal<?php echo $dados['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deseja deletar o cadastro de <?php echo $dados['nome']; ?>?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php $id = $dados['id']; ?>
                                        <form action='php_action/delete.php' method="POST">
                                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                            <input type="hidden" name="nome" value="<?php echo $dados['nome']; ?>">
                                            <input type="hidden" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                                            <input type="hidden" name="email" value="<?php echo $dados['email']; ?>">
                                            <input type="hidden" name="idade" value="<?php echo $dados['idade']; ?>">
                                            <button type="submit" name="delete" class="btn btn-danger">Deletar</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="insert.php"><button type="button" class="btn btn-success"><i style="margin-right: 6px;" class="bi bi-plus-lg"></i> Adicionar novo Cliente</button></a>
        <?php
        if (isset($_SESSION['mensagem'])) {
            echo '

            <div class="modal" tabindex="-1">
                 <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#myModal">Launch modal</button>
            ';
            session_destroy();
        }
        ?>
        <script>
            let myModal = document.getElementById('myModal');
        </script>
</div>

<?php require_once 'includes/footer.php'; ?>