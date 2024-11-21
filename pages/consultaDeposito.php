<?php
    session_start();
    include_once('config.php');

    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "SELECT deposito FROM dados WHERE id = '$id'";
        $result = $conexao->query($sql);
        
        if ($result && $row = $result->fetch_assoc()) {
            echo json_encode(['deposito' => $row['deposito']]);
        } else {
            echo json_encode(['error' => 'Erro ao consultar depósito']);
        }
    } else {
        echo json_encode(['error' => 'Usuário não autenticado']);
    }
?>