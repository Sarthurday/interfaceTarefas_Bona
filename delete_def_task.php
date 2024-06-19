<?php
include 'config_def_task.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idTarefa = $_POST["id"];

    $taskDelete = "DELETE FROM tarefas WHERE id=$idTarefa";

    if ($conn->query($taskDelete) === TRUE) {
        echo "Tarefa deletada com sucesso";
    } else {
        echo "Erro ao deletar tarefa: " . $conn->error;
    }

    $conn->close();
}
?>