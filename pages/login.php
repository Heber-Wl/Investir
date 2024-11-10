<?php 

    session_start();

    if(isset($_SESSION['mensagem'])) {
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; width: 40%; max-width: 400px;">
                ' . $_SESSION['mensagem'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div
        ';
        unset($_SESSION['mensagem']);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/images/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/styles/login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login • Gate Option</title>
</head>
<body>
    <main>
        <form action="testeLogin.php" method="post" style="height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;">

            <div class="logint">
                <h1 class="tx-1">Login</h1>
                <h3 class="tx-2">Não tem Login? <a href="cadastro.php" class="link-cds">Cadastre-se</a></h3>
            </div>
            <div class="boxs">
                <div class="label">
                    <label class="nome-la">EMAIL</label>
                    <input type="email" name="email" placeholder="Email" class="inputss">
                </div>
                <div class="label">
                    <label class="nome-la">SENHA</label>
                    <input type="password" name="senha" placeholder="Senha" class="inputss">
                </div>
            </div>
            
            <a href="" ><input type="submit" value="Entrar" class="but-login" name="submit"></a>
        </form>
    </main>
</body>
</html>