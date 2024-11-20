<?php 
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    if (isset($_SESSION['mensagem'])) {
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; width: 40%; max-width: 400px;">
                ' . $_SESSION['mensagem'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
        unset($_SESSION['mensagem']);
    }

    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Mercado</title>
    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/styles/infoEmpresas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main class="main-content">
        <section class="sidebar">
            <div class="sidebar__menu">
                <a href="pginicial.php">
                    <img src="../assets/images/paginaInicial/gateOption.png" alt="Logo Gate Option" class="sidebar__logo">
                </a>
                <div class="sidebar__menu-items">
                    <a href="pginicial.php" class="menu-item">
                        <img src="../assets/images/icons/panels-top-left.svg" alt="Painel" class="menu-item__icon">
                        <span class="menu-item__label">Painel</span>
                    </a>
                    <a href="mercado.php" class="menu-item">
                        <img src="../assets/images/icons/chart-line.svg" alt="Mercado" class="menu-item__icon">
                        <span class="menu-item__label">Mercado</span>
                    </a>
                    <a href="infoEmpresas.php" class="menu-item">
                        <img src="../assets/images/icons/arrow-left-right.svg" alt="Transações" class="menu-item__icon">
                        <span class="menu-item__label">Transações</span>
                    </a>
                    <a href="investir.php" class="menu-item">
                        <svg class="menu-item__icon investir" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m5.795 14.306l-1.772-1.775l-1.773 1.775m15.955-4.579l1.772 1.776l1.773-1.776"/><path d="M19.977 11.503c0-2.12-.84-4.151-2.336-5.65A7.97 7.97 0 0 0 12 3.513a7.9 7.9 0 0 0-2.97.577a7.98 7.98 0 0 0-4.555 4.75m-.452 3.69a8 8 0 0 0 1.827 5.082a7.97 7.97 0 0 0 9.966 1.927a8 8 0 0 0 3.585-4.034"/><path d="M9.58 13.978A2.28 2.28 0 0 0 12 16.054c1.952 0 2.42-1.123 2.42-2.076s-.807-1.963-2.42-1.963s-2.42-.638-2.42-1.938a2.22 2.22 0 0 1 1.537-2.003c.285-.092.585-.125.883-.097a2.33 2.33 0 0 1 2.42 2.1M12 17.264v-1.051m0-9.45v1.21"/></g></svg>
                        <span class="menu-item__label">Investir</span>
                    </a>
                </div>
            </div>
        </section>
        <div class="content">
            <!-- <header class="content__header">
                <div class="content__welcome">
                    <h4 class="content__welcome-text">Bem vindo novamente!</h4>
                    <a href="login.php" class="content__user-info">
                        <span class="content__user-label">User</span>
                        <img src="../assets/imageS/icons/user.svg" alt="User Profile" class="content__user-icon">
                    </a>
                </div>
            </header> -->
            <section class="content__information">
                <div class="header">
                    <button class="header__aside-handler">
                        <img src="../assets/imageS/icons/align-justify.svg" alt="Menu Icon" class="content__user-icon">
                    </button>
                    <select class="header__filter" name="tradeSelector">
                        <option value="mock">Gráficos de Trades</option>
                    </select>
                </div>
                <div class="graphs">
                    <div class="graph graph--large">
                        <div class="graph__header">
                            <div class="graph__title-container">
                                <p class="graph__title">Investimentos totais</p>
                                <p class="graph__subtitle">R$ 10,216.53</p>
                            </div>
                            <div class="graph__time-options">
                                <button class="graph__time-option">Dia</button>
                                <button class="graph__time-option">Semana</button>
                                <button class="graph__time-option graph__time-option--active">Mês</button>
                            </div>
                        </div>
                        <canvas class="graph__content" height="280" id="graph1"></canvas>
                    </div>
                </div>
                <div class="actions">
                    <!-- <div class="actions__button_group">
                        <button class="actions__button actions__button-buy">
                            Comprar
                            <img src="../assets/images/icons/move-right.svg" alt="Seta Acima" class="icon-buy">
                        </button>
                        <button class="actions__button actions__button-sell">
                            Vender
                            <img src="../assets/images/icons/move-right.svg" alt="Seta Abaixo" class="icon-sell">
                        </button>
                    </div> -->
                    <div class="tabela-mercado">
                        <div class="tabela-interior">
                            <h2>Histórico de Investimento</h1>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Empresa</th>
                                        <th>Valor Investido</th>
                                        <th>Tempo</th>
                                        <th>Ações</th>
                                        <th>Retorno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        // $dbHost = 'Localhost';
                                        // $dbUsername = 'root';
                                        // $dbPassword = '';
                                        // $dbName = 'dados_cadastro';
                                        // $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                            
                                        // if ($conexao->connect_errno) {
                                        //     echo "<tr><td colspan='5'>Erro ao conectar ao banco de dados</td></tr>";
                                        // } else {
                            
                                        //     $sql = "SELECT id_empresa, meu_investimento, minhas_acoes, tempo, valor_final FROM dados_investimento";
                                        //     $result = $conexao->query($sql);
                                        //     if ($result->num_rows > 0) {
                                        //         while ($row = $result->fetch_assoc()) {
                                        //             echo "<tr>";
                                        //             echo "<td>" . $row['id_empresa'] . "</td>";
                                        //             echo "<td>" . number_format($row['meu_investimento'], 0, ',', '.') . "</td>";
                                        //             echo "<td>" . $row['minhas_acoes'] . "</td>";
                                        //             echo "<td>" . $row['tempo'] . "</td>";
                                        //             echo "<td>" . number_format($row['valor_final'], 0, '.', '.') . "</td>";
                                        //             echo "</tr>";
                                        //         }
                                        //     } else {
                                        //         echo "<tr><td colspan='5'>Nenhum dado encontrado</td></tr>";
                                        //     }
                                        //     $conexao->close();
                                        // }
                                        $dbHost = 'Localhost';
                                        $dbUsername = 'root';
                                        $dbPassword = '';
                                        $dbName = 'dados_cadastro';
                                        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                                        if ($conexao->connect_errno) {
                                            echo "<tr><td colspan='5'>Erro ao conectar ao banco de dados</td></tr>";
                                        } else {
                                            // Consulta SQL para filtrar investimentos com base no usuário logado
                                            $sql = "
                                                SELECT di.id_empresa, e.nome_empresa, di.meu_investimento, di.minhas_acoes, di.tempo, di.valor_final
                                                FROM dados_investimento di
                                                JOIN dados d ON di.id_user = d.id
                                                JOIN empresas e ON di.id_empresa = e.id
                                                WHERE d.email = ?";
                                            // Prepara a consulta
                                            if ($stmt = $conexao->prepare($sql)) {
                                                // Associa o parâmetro do email
                                                $stmt->bind_param("s", $logado);

                                                // Executa a consulta
                                                $stmt->execute();

                                                // Armazena o resultado
                                                $result = $stmt->get_result();

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['nome_empresa'] . "</td>";
                                                        echo "<td>" . number_format($row['meu_investimento'], 0, ',', '.') . "</td>";
                                                        echo "<td>" . $row['tempo'] . "</td>";
                                                        echo "<td>" . $row['minhas_acoes'] . "</td>";
                                                        echo "<td>" . number_format($row['valor_final'], 0, '.', '.') . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='5'>Nenhum dado encontrado</td></tr>";
                                                }

                                                // Fecha a consulta
                                                $stmt->close();
                                            }

                                            // Fecha a conexão com o banco de dados
                                            $conexao->close();
                                        }
                                    ?>
                                </tbody>
                                <!-- <tr>
                                    <td>Item 1</td>
                                    <td>R$ 100,00</td>
                                    <td class="table__data-profit">+2%</td>
                                    <td class="table__data-profit">R$ 15</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>R$ 250,00</td>
                                    <td class="table__data-profit">+12%</td>
                                    <td class="table__data-profit">R$ 42</td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td>R$ 75,00</td>
                                    <td class="table__data-loss">-22%</td>
                                    <td class="table__data-loss">R$ -18</td>
                                </tr>
                                <tr>
                                    <td>Item 4</td>
                                    <td>R$ 300,00</td>
                                    <td class="table__data-loss">-22%</td>
                                    <td class="table__data-loss">R$ -12</td>
                                </tr> -->
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <aside class="toggle-aside">
            <div class="aside__content">
                <div class="aside-card">
                    <img src="https://img.migalhas.com.br/gf_Base/empresas/miga/imagens/5E260E50919130EB64FF0A749224AD38EF04_br.jpg" alt="Icon" class="aside-card__img">
                    <div class="aside-card__text">
                        <div class="aside-card__title_group">
                            <h2 class="aside-card__title">PETR4</h2>
                            <p class="table__data-profit">+02%</p>
                        </div>
                        <p class="aside-card__desc">Petroleo Brasileiro SA Petrobras Preference Shares
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script src="../assets/scripts/chart-config.js"></script>
    <script>
        document.querySelector('.header__aside-handler').addEventListener('click', () => {
            document.querySelector('.toggle-aside').classList.toggle('toggle-aside--active');
        });
        const ctx1 = document.getElementById('graph1').getContext('2d');
        const opt = {
            type: 'line',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    label: 'Investimento',
                    data: [65, 59, 80, 81, 56, 55],
                    fill: true,
                    borderColor: '#FD7100',
                    tension: 0.1,
                    backgroundColor: '#403024'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false
                        },
                    },
                    y: {
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false
                        },
                    }
                }
            }
        }
        const optBigGraph = {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'Investimento',
                    data: [65, 59, 80, 81, 56, 55, 60, 90, 60, 100, 80, 100],
                    fill: true,
                    borderColor: '#FD7100',
                    tension: 0.1,
                    backgroundColor: '#403024',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            color: 'white',
                            font: {
                                size: 14
                            }
                        }
                    },
                    y: {
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false
                        }
                    }
                }
            }
        }
        new Chart(ctx1, optBigGraph);
    </script>
</body>

</html>