<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM tarefas WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa deletada com sucesso";
    } else {
        echo "Erro ao deletar tarefa: " . $conn->error;
    }

    $conn->close();
}
?