<?php 
    session_start();
    //print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: ' . $email);
        //print "<br>";
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM dados WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else {
            $user = mysqli_fetch_assoc($result);
            $nome = $user['nome'];

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header('Location: pgInicial.php');
        }

    }else {

        header('Location: login.php');
    }
?>