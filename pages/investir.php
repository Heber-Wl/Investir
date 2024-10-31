<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/images/ico.ico">
    <link rel="stylesheet" href="../assets/styles/painelInvestimentos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <title>Menu de Investimentos</title>
</head>
<body>
    <header>
        <div class="barra-navegacao">
            <img id="logo-site" src="../assets/images/gateOption.png" alt="Logo do projeto e do site">
            <a href="pginicial.html">Voltar</a>
        </div>
        <div class="cabecalho-site">
            <h1>Chegou sua <span>hora de investir!</span></h1>
            <p>Finalmente chegou a sonhada hora de investirmos juntos no seu futuro. Abaixo iremos te mostrar as empresas disponíveis <br>e informações relacionadas as mesmas.</p>
            <h1 id="segundo-h1">Suas opções de escolha:</h1>
        </div>
    </header>
    <main>
        <div class="formulario">
            <form action="investir.php" method="POST">
                <legend>Painel de Investimentos</legend>
                <label for="deposito">Digite o quanto deseja depositar</label>
                <input type="number" name="meu_investimento" id="" value="<?=$deposito?>">
                <label for="numero">Escolha alguma opção:</label>
                <select name="id_empresa" class="input-dropdown">
                    <option selected disabled style="color: gray" value="invalido"></option>
                    <option value="1">Petrobrás</option>
                    <option value="2">Itaú Unibanco</option>
                    <option value="3">Vale</option>
                    <option value="4">Ambev</option>
                    <option value="5">BTG</option>
                    <option value="6">Banco do Brasil</option>
                    <option value="7">WEG</option>
                    <option value="8">Bradesco</option>
                    <option value="9">Santander</option>
                    <option value="10">Itaúsa</option>
                </select>
                <label for="investir">Quanto deseja investir ?</label>
                <input type="number" name="investir" id="investir" value="<?=$investir?>">
                <label for="">Tempo do investimento</label>
                <input type="number" name="tempo" id="idtempo" placeholder="Em meses" value="<?=$tempo?>">
                <input type="submit" name="submit" value="Investir" id="botao-submit" class="butao">
            </form>
        </div>
    </main>

    <?php 
        class Investir {

            public $empresa;
            public $opcao;
            public $valorEmpresa;
            public $investir;
            public $tempo;
            public $deposito;
            public $possui;
            public $MinhasAcoes;
            public $lucroMensal;
            public $jurosMensal;
            public $AcoesEmpresa;
            public $ValorAcoes;
            public $investindo;
            private $pdo;
            public $valoresMensais = [];

            public function __construct($pdo) {
                $this->pdo = $pdo;
            }

            public function EnviarDados() {
                $this->opcao = $_POST["id_empresa"] ?? null;
                $this->investir = $_POST["investir"] ?? null;
                $this->tempo = $_POST["tempo"] ?? null;
                $this->deposito = $_POST['meu_investimento'] ?? null;
            }

            public function ValorInvestido(){
                if ($this->deposito >= $this->investir){
                    $this->possui = $this->deposito - $this->investir;
                    $this->investindo = true;
                }
                else {
                    $this->investindo = false;
                }
            }

            public function calcular() {
                if ($this->opcao == 1){
                    $this->valorEmpresa = 568000000000;
                    $this->empresa = "Petrobras";
                    $this->ValorAcoes = 36;
                    $this->AcoesEmpresa = 15777777778;
                    $this->MinhasAcoes = intdiv($this->investir,$this->ValorAcoes);

                    $jurosPorMes = [
                        1 => 1.69, 2 => -2.18, 3 => 12.13, 4 => 27.06,
                        5 => 30.83, 6 => 37.01, 7 => 36.20, 8 => 47.79,
                        9 => 36.47, 10 => 51.09, 11 => 61.45, 12 => 67.34
                    ];
        
                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0; 
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;
        
                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }

                    
                }
                
                elseif ($this->opcao == 2) {
                    $this->valorEmpresa = 315000000000;
                    $this->empresa = "Itaú Unibanco";
                    $this->ValorAcoes = 33.3;
                    $this->AcoesEmpresa = 9459459459;
                    $this->MinhasAcoes = intdiv($this->investir,$this->ValorAcoes);

                    $jurosPorMes = [
                        1 => 5.13, 2 => 4.94, 3 => 18.79, 4 => 19.86,
                        5 => 11.56, 6 => 7.12, 7 => 5.89, 8 => 23.53,
                        9 => 30.19, 10 => 25.04, 11 => 28.75, 12 => 30.12
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 3) {
                    $this->valorEmpresa = 309000000000;
                    $this->empresa =  "Vale";
                    $this->ValorAcoes = 61.17;
                    $this->AcoesEmpresa = 5051495831.2;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => -11.86, 2 => -11.56, 3 => -4.45, 4 => -10.12,
                        5 => -6.45, 6 => -4.12, 7 => 3.56, 8 => 11.76,
                        9 => -1.45, 10 => -2.89, 11 => -4.8, 12 => 2.89
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0; 
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 4) {
                    $this->valorEmpresa = 201000000000;
                    $this->empresa =  "Ambev";
                    $this->ValorAcoes = 12.39;
                    $this->AcoesEmpresa = 16222760290.5;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => -0.36, 2 => 13.20, 3 => 12.89, 4 => 1.78,
                        5 => -4.78, 6 => -5.99, 7 => 3.52, 8 => 6.1,
                        9 => 1.45, 10 => -2.78, 11 => -2.89, 12 => -4.55
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 5) {
                    $this->valorEmpresa = 169000000000;
                    $this->empresa =  "BTG";
                    $this->ValorAcoes = 36;
                    $this->AcoesEmpresa = 4694444444.4;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => -6.60, 2 => -8.24, 3 => -10.24, 4 => -20.46,
                        5 => -10.14, 6 => -5.56, 7 => -9.47, 8 => -7.92,
                        9 => 1.56, 10 => 2.85, 11 => -2.30, 12 => 7.45
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 6) {
                    $this->valorEmpresa = 165000000000;
                    $this->empresa =  "Banco do Brasil";
                    $this->ValorAcoes = 55.30;
                    $this->AcoesEmpresa = 2983725135.6;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => 13.46, 2 => 11.01, 3 => 10.92, 4 => 11.12,
                        5 => 13.45, 6 => 29.40, 7 => 31.93, 8 => 33.45,
                        9 => 37.12, 10 => 36.47, 11 => 32.23, 12 => 30.41
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 7) {
                    $this->valorEmpresa = 140000000000;
                    $this->empresa =  "WEG";
                    $this->ValorAcoes = 39.77;
                    $this->AcoesEmpresa = 3520241387.9;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => -8.54, 2 => -8, 3 => -3.13, 4 => -13.45,
                        5 => -12.14, 6 => -8.56, 7 => -1.56, 8 => -13.79,
                        9 => 1.5, 10 => 5.96, 11 => 8.47, 12 => 11.78
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 8) {
                    $this->valorEmpresa = 136000000000;
                    $this->empresa =  "Bradesco";
                    $this->ValorAcoes = 13.98;
                    $this->AcoesEmpresa = 9728183118.7;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => 7, 2 => 18.83, 3 => 20.13, 4 => 9.78,
                        5 => 4.98, 6 => 2.06, 7 => 18.25, 8 => 25.25,
                        9 => 14.78, 10 => 4.69, 11 => 8.27, 12 => 5.29
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 9) {
                    $this->valorEmpresa = 109000000000;
                    $this->empresa =  "Santander";
                    $this->ValorAcoes = 23.48;
                    $this->AcoesEmpresa = 4642248722.3;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => -7.49, 2 => 8.09, 3 => 16.72, 4 => 12.75,
                        5 => 9.91, 6 => 6.45, 7 => 19.67, 8 => 20.4,
                        9 => 17.02, 10 => 19.77, 11 => 37.53, 12 => 36.45
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }

                elseif ($this->opcao == 10) {
                    $this->valorEmpresa = 108000000000;
                    $this->empresa =  "Itaúsa";
                    $this->ValorAcoes = 10.34;
                    $this->AcoesEmpresa = 10444874274.6;
                    $this->MinhasAcoes = intdiv($this->investir, $this->ValorAcoes);

                    $jurosPorMes = [
                        1 => 1.14, 2 => 12.53, 3 => 15, 4 => 9.74,
                        5 => 8.93, 6 => 4.96, 7 => 23.43, 8 => 29.79,
                        9 => 26.22, 10 => 29.22, 11 => 31.16, 12 => 22.21
                    ];

                    for ($mes = 1; $mes <= $this->tempo; $mes++) {
                        $percentualJuros = $jurosPorMes[$mes] ?? 0;
                        $this->jurosMensal = (($this->investir * $percentualJuros) / 100);
                        $this->lucroMensal = $this->jurosMensal + $this->investir;

                        $this->valoresMensais[$mes] = [
                            'juros' => $this->jurosMensal,
                            'saldo' => $this->lucroMensal
                        ];
                    }
                }
                
            }

            public function salvarDados() {

                if(isset($_POST['submit'])){

                    print_r($_POST['meu_investimento']);
                    print_r($_POST['id_empresa']);
                    print_r($_POST['investir']);
                    print_r($_POST['tempo']);

                //     $this->opcao = $_POST["id_empresa"] ?? null;
                // $this->investir = $_POST["investir"] ?? null;
                // $this->tempo = $_POST["tempo"] ?? null;
                // $this->deposito = $_POST['meu_investimento'] ?? null;
                    // include_once('config.php');

                    // $investimento = $_POST['meu_investimento'];
                    // $decida = $_POST['decida'];
                    // $investir = $_POST['investir'];
                    // $tempo = $_POST['tempo'];

                    // $result = mysqli_query($conexao, "INSERT INTO u");
                }
            }

            public function ordem() {
                $this->EnviarDados();
                $this->ValorInvestido();
                $this->calcular();
                $this->Mostrar();
                $this->salvarDados();
            }

            public function Mostrar() {
                if ($this->investindo == true) {
                    echo "Você investiu R$ " . number_format($this->investir, 0, ',', '.') . " na empresa $this->empresa, que possui R$ " . number_format($this->valorEmpresa, 0, ',', '.') . " de valor de mercado.<br>";
                    echo "Você comprou $this->MinhasAcoes ações.<br>";
                    echo "Você possui saldo de R$ " . number_format($this->possui, 0, ',', '.') . ".<br>";
                    echo "Detalhes do investimento mês a mês:<br>";

                    foreach ($this->valoresMensais as $mes => $dados) {
                        echo "Mês $mes:  " . number_format($dados['juros'], 2, ',', '.') . "%  | Saldo: R$ " . number_format($dados['saldo'], 2, ',', '.') . "<br>";
                    }
        
                    echo "Você deixou o valor por $this->tempo meses, seu saldo final é de R$ " . number_format($this->valoresMensais[$this->tempo]['saldo'], 2, ',', '.');
                } else {
                    echo "Valor insuficiente para investimento.<br>";
                }
            }
        }

        $user = new Investir($pdo);
        $user->ordem();
        
    
    ?>
    
</body>
</html>