<?php
include 'config_def_task.php';

if(isset($_GET['id'])){
    $idTarefa = $_GET['id'];
    $taskUpdate = "SELECT * FROM pessoas WHERE id=$idUser";
    $result = $conn->query($username);
    $row = $result->fetch_assoc(); //obtem os dados do registro
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar Pessoa</h2>
    <!-- Formulário para atualizar a pessoa -->
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <!-- Campo oculto com o ID -->
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $row['titulo']; ?>" required>  <!-- Campo para o nome -->
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" class="form-control" id="descricao" value="<?php echo $row['descricao']; ?>" required>  <!-- Campo para o sobrenome -->
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" id="status" value="<?php echo $row['status']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="data_criacao">Data Criação</label>
            <input type="text" name="data_criacao" class="form-control" id="data_criacao" value="<?php echo $row['data_criacao']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="data_conclusao">Data Conclusão</label>
            <input type="text" name="data_conclusao" class="form-control" id="data_conclusao" value="<?php echo $row['data_conclusao']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="responsavel">Responsável</label>
            <input type="text" name="responsavel" class="form-control" id="responsavel" value="<?php echo $row['responsavel']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>  <!-- Botão para enviar o formulário -->
    </form>
</div>
</body>
</html>