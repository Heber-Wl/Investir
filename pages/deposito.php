<?php 

session_start();
    
    if (isset($_POST['submit'])){

        include_once('config.php');
        
        $deposito = $_POST['deposito'];
        $user_id = $_SESSION['id'];


        $result = mysqli_query($conexao, "UPDATE dados SET deposito = '$deposito' WHERE id = '$user_id'");

        if ($result && mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = "Deposito feito com sucesso!";
            $_SESSION['mensagem_tipo'] = "sucesso";
        } else {
            $_SESSION['mensagem'] = "Erro ao realizar o deposito.";
            $_SESSION['mensagem_tipo'] = "erro"; 

            echo "Erro SQL: " . mysqli_error($conexao);
        }

        header('Location: pginicial.php');
        exit();
    }

?>