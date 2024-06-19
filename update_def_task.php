<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];
    $data_criacao = $_POST["data_criacao"];
    $data_conclusao = $_POST["data_conclusao"];
    $responsavel = $_POST["responsavel"];

    $sql = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao', status='$status', data_criacao='$data_criacao', data_conclusao='$data_conclusao', responsavel='$responsavel' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa atualizada com sucesso";
    } else {
        echo "Erro ao atualizar tarefa: " . $conn->error;
    }

    $conn->close();
}
?>