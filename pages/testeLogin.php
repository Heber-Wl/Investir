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

            $_SESSION['mensagem'] = "Email ou senha incorretos";
            $_SESSION['mensagem_tipo'] = "erro";

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else {
            $user = mysqli_fetch_assoc($result);
            $nome = $user['nome'];
            $id = $user['id']; 
            $deposito = $user['deposito'];

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            $_SESSION['id'] = $id;
            $_SESSION['deposito'] = $deposito;

            $_SESSION['mensagem'] = "Login efetuado com sucesso!";
            $_SESSION['mensagem_tipo'] = "sucesso";

            header('Location: pgInicial.php');
        }

    }else {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos";
        $_SESSION['mensagem_tipo'] = "erro";
        header('Location: login.php');
    }
?>