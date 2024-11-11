<?php 

session_start();
    
    if (isset($_POST['submit'])){

        include_once('config.php');
        
        $deposito = $_POST['deposito'];
        $user_id = $_SESSION['id'];

        $query = "SELECT deposito FROM dados WHERE id = '$user_id'";
        $result = mysqli_query($conexao, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $saldo_atual = isset($row['deposito']) ? $row['deposito'] : 0;

            $novo_saldo = $saldo_atual + $deposito;

            $update_query = "UPDATE dados SET deposito = '$novo_saldo' WHERE id = '$user_id'";
            $update_result = mysqli_query($conexao, $update_query);

            if ($result && mysqli_affected_rows($conexao) > 0) {
                $_SESSION['mensagem'] = "Deposito feito com sucesso!";
                $_SESSION['mensagem_tipo'] = "sucesso";
            } else {
                $_SESSION['mensagem'] = "Erro ao realizar o deposito.";
                $_SESSION['mensagem_tipo'] = "erro"; 
    
                echo "Erro SQL: " . mysqli_error($conexao);
            }
        } else {
            $_SESSION['mensagem'] = "Erro ao consultar o saldo atual.";
            $_SESSION['mensagem_tipo'] = "erro"; 
            echo "Erro SQL: " . mysqli_error($conexao);
        }
        
        header('Location: pginicial.php');
        exit();
    }

?>