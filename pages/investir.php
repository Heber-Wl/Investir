<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Mercado</title>
    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/styles/investir.css">
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
                    <a href="#" class="menu-item">
                        <svg class="menu-item__icon investir" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m5.795 14.306l-1.772-1.775l-1.773 1.775m15.955-4.579l1.772 1.776l1.773-1.776"/><path d="M19.977 11.503c0-2.12-.84-4.151-2.336-5.65A7.97 7.97 0 0 0 12 3.513a7.9 7.9 0 0 0-2.97.577a7.98 7.98 0 0 0-4.555 4.75m-.452 3.69a8 8 0 0 0 1.827 5.082a7.97 7.97 0 0 0 9.966 1.927a8 8 0 0 0 3.585-4.034"/><path d="M9.58 13.978A2.28 2.28 0 0 0 12 16.054c1.952 0 2.42-1.123 2.42-2.076s-.807-1.963-2.42-1.963s-2.42-.638-2.42-1.938a2.22 2.22 0 0 1 1.537-2.003c.285-.092.585-.125.883-.097a2.33 2.33 0 0 1 2.42 2.1M12 17.264v-1.051m0-9.45v1.21"/></g></svg>
                        <span class="menu-item__label">Investir</span>
                    </a>
                </div>
            </div>
        </section>
        
        <div>
            <!-- <form action="investirEmpresa.php" method="POST"> -->
                <div class="div-select">
                    <select name="empresas" id="selecionar-empresa" class="select-empresa" onchange="atualizarEmpresaSelecionada(this.value)">
                        <option value="" disabled selected>Empresas</option>
                        <option value="1" class="select-option">Petrobrás</option>
                        <option value="2" class="select-option">Itaú Unibanco</option>
                        <option value="3" class="select-option">Vale</option>
                        <option value="4" class="select-option">Amber</option>
                        <option value="5" class="select-option">BTG</option>
                        <option value="6" class="select-option">Banco do Brasil</option>
                        <option value="7" class="select-option">WEG</option>
                        <option value="8" class="select-option">Bradesco</option>
                        <option value="9" class="select-option">Santander</option>
                        <option value="10" class="select-option">Itaúsa</option>
                    </select>
                </div>
                <script>
                    function atualizarEmpresaSelecionada(valor) {
                        document.querySelectorAll('.input-empresa').forEach(input => {
                            input.value = valor;
                        });
                    }
                </script>

                
                <div class="content conteudo" id="empresa-1">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/petrobras.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> PETROBRÁS N1</h1>
                                <!-- quero que o select fique aqui -->
                                <h1 class="valor-acao">36,00</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal1">INVESTIR</button>
                        <div class="modal fade" id="investirModal1" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-2" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/logo-itau.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> ITAÚ BC</h1>
                
                                <h1 class="valor-acao">33,30</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal2">INVESTIR</button>
                        <div class="modal fade" id="investirModal2" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir em Petrobrás</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-3" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/vale.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Vale </h1>
                
                                <h1 class="valor-acao">61,75</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal3">INVESTIR</button>
                        <div class="modal fade" id="investirModal3" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-4" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/logo-ambev.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Ambev </h1>
                
                                <h1 class="valor-acao">12,39</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal4">INVESTIR</button>
                        <div class="modal fade" id="investirModal4" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-5" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/btg.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> BTG </h1>
                
                                <h1 class="valor-acao">36</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal5">INVESTIR</button>
                        <div class="modal fade" id="investirModal5" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-6" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/logo-b.brasil.jpg" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Banco do Brasil N1</h1>
                
                                <h1 class="valor-acao">55,30</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal6">INVESTIR</button>
                        <div class="modal fade" id="investirModal6" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST" >
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-7" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/weg.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> WEG N1</h1>
                
                                <h1 class="valor-acao">39,77</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal7">INVESTIR</button>
                        <div class="modal fade" id="investirModal7" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST" >
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-8" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/bradesco.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Bradesco N1</h1>
                
                                <h1 class="valor-acao">13,98</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal8">INVESTIR</button>
                        <div class="modal fade" id="investirModal8" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST" >
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-9" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/logo-santander.jpg" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Santander N1</h1>
                
                                <h1 class="valor-acao">23,48</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal9">INVESTIR</button>
                        <div class="modal fade" id="investirModal9" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST">
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
                <div class="content conteudo" id="empresa-10" style="display: none;">
                    <div class="content-home">
                        <div class="info-empresa">
                            <img src="../assets/images/logos/logo-itausa.png" alt="" class="img-empresa">
                            <div class="dados-empresa">
                                <h1 class="nome-empresa"> Itaúsa N1</h1>
                
                                <h1 class="valor-acao">10,34</h1>
                            </div>
                        </div>
                        <button type="button" class="btn-investir btn-primary" data-toggle="modal" data-target="#investirModal10">INVESTIR</button>
                        <div class="modal fade" id="investirModal10" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <form action="investirEmpresa.php" method="POST" >
                                    <input type="hidden" name="empresas" class="input-empresa" value="">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitulo">Investir no Itaú</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-modal investimento">
                                                <label for="">Quanto deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="investimento">
                                            </div>
                                            <div class="input-modal tempo">
                                                <label for="">Quanto tempo deseja investir:</label>
                                                <input type="number" placeholder="Digite..." name="tempo">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <input type="submit" class="btn btn-primary" value="Investir" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grafico-empresa">
                        <img src="../assets/images/graficoPrincipal2.png" alt="" class="img-grafico">
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

<script>
    document.getElementById('selecionar-empresa').addEventListener('change', function() {
        // Oculta todas as seções de empresa
        document.querySelectorAll('.content.conteudo').forEach(function(section) {
            section.style.display = 'none';
        });

        // Mostra a seção correspondente à empresa selecionada
        const selectedValue = this.value;
        if (selectedValue) {
            const selectedSection = document.getElementById(`empresa-${selectedValue}`);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>