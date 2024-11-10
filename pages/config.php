<?php 
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dados_cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
    //if ($conexao->connect_errno){
    //    print "Erro";
    //} else {
    //    print "Conexão efetuada com sucesso";
    //}
?>