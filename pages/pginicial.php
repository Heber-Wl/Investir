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
    $nome = $_SESSION['nome']; 
    $deposito = $_SESSION['deposito'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/styles/pgIni.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main>
        <div class="div-1">
            <div class="barra1">
                <a href="index.html"><img src="../assets/images/paginaInicial/gateOption.png" alt="" class="logo"></a>
                <div class="barra-esquerda">
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
        </div>
        <div class="div-2">
            <div class="barra2">
                <div class="bemvindo">
                    <h4 class="bemv">Bem vindo novamente!</h4>
                    <div class="div-btn-user">
                        <button type="button" class="btn-user">
                            <div class="linha-user"  onclick="toggleSair()">
                                <!-- <img src="../assets/images/paginaInicial/user.png" alt="" class="imguser"> -->
                                <svg class="imguser" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="white" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2M8.5 9.5a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0m9.758 7.484A7.99 7.99 0 0 1 12 20a7.99 7.99 0 0 1-6.258-3.016C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984"/></g></svg>
                                <label for="" class="lab-user-tex"><?php echo htmlspecialchars($nome); ?></label>
                            </div>
                        </button>
                        <div class="sair" style="display: none;">
                            <a href="sair.php" class="btn-sair">Sair</a>
                        </div>
                    </div>
                </div>
                <div class="portifolio">
                    <h3 class="port">Potfólio de ações</h3>
                    <button type="button" class="btn-deposito" data-bs-toggle="modal" data-bs-target="#depositModal">
                        <div class="vertudo">
                            <h5 class="tudo">Meu Saldo: </h5>
                            <h4 class="seta">R$ <?php echo number_format(isset($deposito) ? $deposito : 0, 1, ',', '.'); ?></h4>
                        </div>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="depositModal" tabindex="-1" aria-labelledby="depositModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="depositModalLabel">Depósito</h5>
                                </div>
                                <div class="input-modal depositar">
                                    <form action="deposito.php" method="POST">
                                        <div class="mb-3 iput">
                                            <label for="depositAmount" class="form-label">Quanto deseja depositar?</label>
                                            <input type="number" class="form-control depositar" id="depositAmount" name="deposito" required>
                                        </div>
                                        <div class="div-btn-depositar">
                                            <button type="submit" class="btn btn-primary" name="submit">Depositar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-grafcos1">
                <div class="card-graph">
                    <div class="card-grap-header-title-container">
                        <p class="card-graph-title">Netflix</p>
                        <p class="card-graph-subtitle">NFLX</p>
                    </div>

                    <div class="card-grap-header-title-container">
                        <p class="card-graph-subtitle bold">R$ 416.03</p>
                        <p class="card-grap-porcentagem-subiu">+2.37%</p>
                    </div>
                    <canvas height="120" id="graph1"></canvas>
                </div>

                <div class="card-graph">
                    <div class="card-grap-header-title-container">
                        <p class="card-graph-title">Netflix</p>
                        <p class="card-graph-subtitle">NFLX</p>
                    </div>

                    <div class="card-grap-header-title-container">
                        <p class="card-graph-subtitle bold">R$ 416.03</p>
                        <p class="card-grap-porcentagem-subiu">+2.37%</p>
                    </div>
                    <canvas height="120" id="graph2"></canvas>
                </div>


                <div class="card-graph">
                    <div class="card-grap-header-title-container">
                        <p class="card-graph-title">Netflix</p>
                        <p class="card-graph-subtitle">NFLX</p>
                    </div>

                    <div class="card-grap-header-title-container">
                        <p class="card-graph-subtitle bold">R$ 416.03</p>
                        <p class="card-grap-porcentagem-subiu">+2.37%</p>
                    </div>
                    <canvas height="120" id="graph3"></canvas>
                </div>
            </div>
            <div class="div-graficos2">
                <div class="card-big-graph">
                    <div>
                        <div class="big-graph-header">
                            <div class="big-graph-title-container">
                                <p class="big-graph-title">Investimentos totais</p>
                                <p class="big-graph-subtitle bold">R$ 10,216.53</p>
                            </div>

                            <div class="container-type-graph">
                                <div class="type-graph">Dia</div>
                                <div class="type-graph">Semana</div>
                                <div class="type-graph active">Mês</div>
                            </div>
                        </div>
                    </div>
                    <canvas height="240" id="graph4"></canvas>
                </div>
                <img src="../assets/images/paginaInicial/empresas.png" alt="" class="imglistaEmmpresas">
            </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>

    <script>
        const ctx1 = document.getElementById('graph1').getContext('2d');
        const ctx2 = document.getElementById('graph2').getContext('2d');
        const ctx3 = document.getElementById('graph3').getContext('2d');
        const ctx4 = document.getElementById('graph4').getContext('2d');

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
                    legend: { display: false, position: 'top' },
                },
                scales: {
                    x: {
                        ticks: { display: false },
                        grid: { display: false },
                    },
                    y: {
                        ticks: { display: false },
                        grid: { display: false },
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
                    legend: { display: false, position: 'top' },
                },
                scales: {
                    x: {
                        ticks: {
                            color: 'white',
                            font: { size: 14 }
                        }
                    },
                    y: {
                        ticks: { display: false },
                        grid: { display: false }
                    }
                }
            }
        }

        new Chart(ctx1, opt);
        new Chart(ctx2, opt);
        new Chart(ctx3, opt);
        new Chart(ctx4, optBigGraph);
    </script>
    <script>
        function toggleSair() {
            var sairDiv = document.querySelector('.sair');
            sairDiv.style.display = sairDiv.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</body>

</html>