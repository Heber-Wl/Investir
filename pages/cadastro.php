<?php 
    session_start();
    
    if (isset($_POST['submit'])){
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $dataNas = $_POST['dataNas'];

        $result = mysqli_query($conexao, "INSERT INTO dados(nome,email,senha,data_nas) VALUES ('$nome', '$email', '$senha', '$dataNas')");

        if ($result) {
            $_SESSION['mensagem'] = "Cadastro feito com sucesso!";
        }

        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/images/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/styles/cadastro.css">

    <title>Cadastre-se agora mesmo</title>
</head>
<body>
    <main class="main">
        <form action="cadastro.php" method="post" style="height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;">
            <div class="novouser">
                <h1 class="tx1">Criar Nova Conta</h1>
                <h3 class="tx2">Já tem Cadastro? <a href="login.php" class="login">Login</a></h3>
            </div>
            <div class="inputs">
                <div class="container-input">
                    <label class="nome">NOME</label>
                    <input type="text" placeholder="Nome" class="inputs1" name="nome">
                </div>
                <div  class="container-input">
                    <label class="nome">EMAIL</label>
                    <input type="email" placeholder="Email" class="inputs1" name="email">
                </div>
                <div  class="container-input">
                    <label class="nome">SENHA</label>
                    <input type="password" placeholder="Senha" class="inputs1" name="senha">
                </div>
                <div>
                    <div class="container-input">
                        <label class="nome">DATA DE NASCIMENTO</label>
                        <input type="date" name="dataNas" id="data" >
                    </div>
                </div>
            </div>
            
            <input type="submit" name="submit" value="Entrar" class="but-entrar">
        </form>
    </main>
</body>
</html>