<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Mercado</title>
    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="../assets/styles/investir.css"> -->
    <link rel="stylesheet" href="../assets/styles/mercado.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <main class="main-content">
        <section class="sidebar">
            <div class="sidebar__menu">
                <a href="pginicial.html">
                    <img src="../assets/images/paginaInicial/gateOption.png" alt="Logo Gate Option" class="sidebar__logo">
                </a>
                <div class="sidebar__menu-items">
                    <a href="pginicial.html" class="menu-item">
                        <img src="../assets/images/icons/panels-top-left.svg" alt="Painel" class="menu-item__icon">
                        <span class="menu-item__label">Painel</span>
                    </a>
                    <a href="mercado.php" class="menu-item">
                        <img src="../assets/images/icons/chart-line.svg" alt="Mercado" class="menu-item__icon">
                        <span class="menu-item__label">Mercado</span>
                    </a>
                    <a href="infoEmpresas.html" class="menu-item">
                        <img src="../assets/images/icons/arrow-left-right.svg" alt="Transações" class="menu-item__icon">
                        <span class="menu-item__label">Transações</span>
                    </a>
                    <a href="investir.html" class="menu-item">
                        <img src="../assets/images/icons/user.svg" alt="Opções" class="menu-item__icon">
                        <span class="menu-item__label">Investir</span>
                    </a>
                </div>
            </div>
        </section>
        <div class="tabela-mercado">
            <div class="tabela-interior">
                <h2>Tabela de Ações</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Preço da Ação</th>
                            <th>Ações</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $dbHost = 'Localhost';
                        $dbUsername = 'root';
                        $dbPassword = '';
                        $dbName = 'dados_cadastro';

                        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                        
                        if ($conexao->connect_errno) {
                            echo "<tr><td colspan='5'>Erro ao conectar ao banco de dados</td></tr>";
                        } else {
                            
                            $sql = "SELECT id, nome_empresa, qtd_acoes, preco_acao, valor_mercado FROM empresas";
                            $result = $conexao->query($sql);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['nome_empresa'] . "</td>";
                                    echo "<td>" . number_format($row['qtd_acoes'], 0, ',', '.') . "</td>";
                                    echo "<td>" . number_format($row['preco_acao'], 2, ',', '.') . "</td>";
                                    echo "<td>" . number_format($row['valor_mercado'], 0, '.', '.') . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>Nenhum dado encontrado</td></tr>";
                            }

                            $conexao->close();
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>