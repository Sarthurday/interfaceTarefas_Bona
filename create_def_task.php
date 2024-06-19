<?php
include 'config_def_task.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];
    $data_criacao = $_POST["data_criacao"];
    $data_conclusao = $_POST["data_conclusao"];
    $responsavel = $_POST["responsavel"];

    // Inserindo na tabela tarefas
    $taskInsert = "INSERT INTO tarefas (titulo, descricao, status, data_criacao, data_conclusao, responsavel) VALUES ('$titulo', '$descricao', '$status', '$data_criacao', '$data_conclusao', '$responsavel')";

    if ($conn->query($taskInsert) === TRUE) {
        header("Location: index.php"); // Redireciona para o index se der tudo certo
        exit();
    } else {
        echo "Erro: " . $taskInsert . "<br>" . $conn->error; // Retorna erro
    }

    $conn->close();
}
?>