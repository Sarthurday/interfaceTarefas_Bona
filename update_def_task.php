<?php
include 'config_def_task.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idTarefa = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];
    $data_criacao = $_POST["data_criacao"];
    $data_conclusao = $_POST["data_conclusao"];
    $responsavel = $_POST["responsavel"];

    $taskUpdate = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao', status='$status', data_criacao='$data_criacao', data_conclusao='$data_conclusao', responsavel='$responsavel' WHERE id=$id";

    if ($conn->query($taskUpdate) === TRUE) {
        echo "Tarefa atualizada com sucesso";
    } else {
        echo "Erro ao atualizar tarefa: " . $conn->error;
    }

    $conn->close();
}
?>