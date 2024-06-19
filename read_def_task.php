<?php
include 'config_def_task.php';

$taskRead = "SELECT * FROM tarefas";
$result = $conn->query($taskRead);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Título: " . $row["titulo"] . " - Descrição: " . $row["descricao"] . " - Status: " . $row["status"] . " - Data de Criação: " . $row["data_criacao"] . " - Data de Conclusão: " . $row["data_conclusao"] . " - Responsável: " . $row["responsavel"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>