<?php 

    class Investir {

        public $empresa;
        public $opcao;
        public $valorEmpresa;
        public $AcoesEmpresa;
        public $ValorAcoes;
        public $MinhasAcoes;
        public $tempo;
        public $ValorInvestido;
        public $lucroMensal;
        public $jurosMensal;
        public $lucroFinal;
        public $valorFinal;
        public $id_investimento;
        public $valoresMensais = [];

        public function __construct() {
            
        }

        public function atribuicaoVariaveis() {

            $this->opcao = $_POST['empresas'];
            $this->ValorInvestido = $_POST['investimento'] ?? null;
            $this->tempo = $_POST['tempo'] ?? null;
        }

        public function calcularInvestimento() {

            if ($this->opcao == "1"){
                $this->valorEmpresa = 568000000000;
                $this->empresa = "Petrobras";
                $this->ValorAcoes = 36;
                $this->AcoesEmpresa = 15777777778;
                $this->MinhasAcoes = intdiv($this->ValorInvestido,$this->ValorAcoes);

                $jurosPorMes = [
                    1 => 1.69, 2 => -2.18, 3 => 12.13, 4 => 27.06,
                    5 => 30.83, 6 => 37.01, 7 => 36.20, 8 => 47.79,
                    9 => 36.47, 10 => 51.09, 11 => 61.45, 12 => 67.34
                ];

                $this->lucroFinal = 0;

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0; 

                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->ValorInvestido + $this->jurosMensal;
    
                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

            }
            
            elseif ($this->opcao == '2') {
                $this->valorEmpresa = 315000000000;
                $this->empresa = "Itaú Unibanco";
                $this->ValorAcoes = 33.3;
                $this->AcoesEmpresa = 9459459459;
                $this->MinhasAcoes = intdiv($this->ValorInvestido,$this->ValorAcoes);

                $jurosPorMes = [
                    1 => 5.13, 2 => 4.94, 3 => 18.79, 4 => 19.86,
                    5 => 11.56, 6 => 7.12, 7 => 5.89, 8 => 23.53,
                    9 => 30.19, 10 => 25.04, 11 => 28.75, 12 => 30.12
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '3') {
                $this->valorEmpresa = 309000000000;
                $this->empresa =  "Vale";
                $this->ValorAcoes = 61.17;
                $this->AcoesEmpresa = 5051495831.2;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => -11.86, 2 => -11.56, 3 => -4.45, 4 => -10.12,
                    5 => -6.45, 6 => -4.12, 7 => 3.56, 8 => 11.76,
                    9 => -1.45, 10 => -2.89, 11 => -4.8, 12 => 2.89
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0; 
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '4') {
                $this->valorEmpresa = 201000000000;
                $this->empresa =  "Ambev";
                $this->ValorAcoes = 12.39;
                $this->AcoesEmpresa = 16222760290.5;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => -0.36, 2 => 13.20, 3 => 12.89, 4 => 1.78,
                    5 => -4.78, 6 => -5.99, 7 => 3.52, 8 => 6.1,
                    9 => 1.45, 10 => -2.78, 11 => -2.89, 12 => -4.55
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '5') {
                $this->valorEmpresa = 169000000000;
                $this->empresa =  "BTG";
                $this->ValorAcoes = 36;
                $this->AcoesEmpresa = 4694444444.4;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => -6.60, 2 => -8.24, 3 => -10.24, 4 => -20.46,
                    5 => -10.14, 6 => -5.56, 7 => -9.47, 8 => -7.92,
                    9 => 1.56, 10 => 2.85, 11 => -2.30, 12 => 7.45
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '6') {
                $this->valorEmpresa = 165000000000;
                $this->empresa =  "Banco do Brasil";
                $this->ValorAcoes = 55.30;
                $this->AcoesEmpresa = 2983725135.6;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => 13.46, 2 => 11.01, 3 => 10.92, 4 => 11.12,
                    5 => 13.45, 6 => 29.40, 7 => 31.93, 8 => 33.45,
                    9 => 37.12, 10 => 36.47, 11 => 32.23, 12 => 30.41
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '7') {
                $this->valorEmpresa = 140000000000;
                $this->empresa =  "WEG";
                $this->ValorAcoes = 39.77;
                $this->AcoesEmpresa = 3520241387.9;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => -8.54, 2 => -8, 3 => -3.13, 4 => -13.45,
                    5 => -12.14, 6 => -8.56, 7 => -1.56, 8 => -13.79,
                    9 => 1.5, 10 => 5.96, 11 => 8.47, 12 => 11.78
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '8') {
                $this->valorEmpresa = 136000000000;
                $this->empresa =  "Bradesco";
                $this->ValorAcoes = 13.98;
                $this->AcoesEmpresa = 9728183118.7;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => 7, 2 => 18.83, 3 => 20.13, 4 => 9.78,
                    5 => 4.98, 6 => 2.06, 7 => 18.25, 8 => 25.25,
                    9 => 14.78, 10 => 4.69, 11 => 8.27, 12 => 5.29
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '9') {
                $this->valorEmpresa = 109000000000;
                $this->empresa =  "Santander";
                $this->ValorAcoes = 23.48;
                $this->AcoesEmpresa = 4642248722.3;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => -7.49, 2 => 8.09, 3 => 16.72, 4 => 12.75,
                    5 => 9.91, 6 => 6.45, 7 => 19.67, 8 => 20.4,
                    9 => 17.02, 10 => 19.77, 11 => 37.53, 12 => 36.45
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                
            }

            elseif ($this->opcao == '10') {
                $this->valorEmpresa = 108000000000;
                $this->empresa =  "Itaúsa";
                $this->ValorAcoes = 10.34;
                $this->AcoesEmpresa = 10444874274.6;
                $this->MinhasAcoes = intdiv($this->ValorInvestido, $this->ValorAcoes);

                $jurosPorMes = [
                    1 => 1.14, 2 => 12.53, 3 => 15, 4 => 9.74,
                    5 => 8.93, 6 => 4.96, 7 => 23.43, 8 => 29.79,
                    9 => 26.22, 10 => 29.22, 11 => 31.16, 12 => 22.21
                ];

                for ($mes = 1; $mes <= $this->tempo; $mes++) {
                    $percentualJuros = $jurosPorMes[$mes] ?? 0;
                    $this->jurosMensal = (($this->ValorInvestido * $percentualJuros) / 100);
                    $this->lucroMensal = $this->jurosMensal + $this->ValorInvestido;

                    $this->valoresMensais[$mes] = [
                        'juros' => $this->jurosMensal,
                        'saldo' => $this->lucroMensal
                    ];

                    if ($mes == $this->tempo) {
                        $this->lucroFinal = $this->jurosMensal;
                        $this->valorFinal = $this->lucroMensal;
                    }
                }

                

            } else {
                print("Opção não foi aceita");
            }
            

        }
        
        public function Mostrar() {
            print("Você investiu {$this->ValorInvestido} na empresa {$this->empresa} e obteve os seguintes resultados mensais:<br>");
    
            foreach ($this->valoresMensais as $mes => $dados) {
                print("Mês {$mes}: Juros = {$dados['juros']}, Saldo = {$dados['saldo']}<br>");
            }
            print("Lucro de : {$this->lucroFinal }.<br>");
            print("Total de : {$this->valorFinal  }.<br>");
            print("Total de meses investidos: {$this->tempo}.<br>");
            print("Comprei {$this->MinhasAcoes} ações");
        }

        public function salvarBanco() {

            include_once('config.php');

            session_start();

            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];

                $slq = "SELECT id FROM dados WHERE email = '$email'";
                $result = mysqli_query($conexao, $slq);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $id_user = $row['id'];
                } else {
                    die("Erro: Usuário não encontrado.");
                }
            }

            $result = mysqli_query($conexao, "INSERT INTO dados_investimento(lucro,meu_investimento, minhas_acoes, tempo, id_user, id_empresa, valor_final) VALUES ('$this->lucroFinal','$this->ValorInvestido','$this->MinhasAcoes','$this->tempo', $id_user, '$this->opcao', '$this->valorFinal')");

            if (!$result) {
                die("Erro ao salvar no banco: " . mysqli_error($conexao));

            }

            $id_investimento = mysqli_insert_id($conexao);

            $meses = [];
            for ($mes = 1; $mes <= 12; $mes++) {
                $meses[] = isset($this->valoresMensais[$mes]) ? $this->valoresMensais[$mes]['saldo'] : 0;
            }

            $query2 = "INSERT INTO lucro_empresa(id_empresa, id_investimento, valor_investido, mes_1, mes_2, mes_3, mes_4, mes_5, mes_6, mes_7, mes_8, mes_9, mes_10, mes_11, mes_12) 
                    VALUES ('$this->opcao', '$id_investimento', '$this->ValorInvestido', {$meses[0]}, {$meses[1]}, {$meses[2]}, {$meses[3]}, {$meses[4]}, {$meses[5]}, {$meses[6]}, {$meses[7]}, {$meses[8]}, {$meses[9]}, {$meses[10]}, {$meses[11]})";

            $result2 = mysqli_query($conexao, $query2);

            if ($result2) {
                $_SESSION['mensagem'] = "O Investimento foi um sucesso!";

                header('Location: infoEmpresas.php');
                exit();
            } else {
                die("Erro ao salvar lucros mensais no banco: " . mysqli_error($conexao));
            }


        }

        public function ordem() {

            $this->atribuicaoVariaveis();
            $this->calcularInvestimento();
            $this->salvarBanco();
            // $this->Mostrar();
        }



    }

$user = new Investir();
$user->ordem();