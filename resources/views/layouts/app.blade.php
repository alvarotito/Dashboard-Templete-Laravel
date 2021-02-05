<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Font Family Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Scrollbar Publin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{route('resumo')}}">
                    <span class="title">Tax Prático</span>
                </a>
            </div>
            <ul class="list-unstyled components">
                <li class="background">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Home<span></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{route('resumo')}}"> <i class="fas fa-circle"></i> Resumo Pêndencias Fiscais</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#contribuinteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <span>Contribuinte</span>
                    </a>
                    <ul class="collapse list-unstyled" id="contribuinteSubmenu">
                        <li>
                            <a href="{{route('dados')}}"> <i class="fas fa-circle"></i> Dados Cadastrais</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#escrituracaoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Escrituração Fiscal Digital</span></a>
                    <ul class="collapse list-unstyled" id="escrituracaoSubmenu">
                        <li class="down">
                            <a href="{{route('apuracao')}}"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="{{route('debitos')}}"> <i class="fas fa-circle"></i> Débitos declarados</a>
                        </li>
                        <li>
                            <a href="{{route('registros')}}"> <i class="fas fa-circle"></i> Registros de Entrada e Saída</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#debitosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Débitos Fiscais</span></a>
                    <ul class="collapse list-unstyled" id="debitosSubmenu">
                        <li class="down">
                            <a href="{{route('detalhes')}}"> <i class="fas fa-circle"></i> Detalhes Débitos Fiscais</a>
                        </li>
                        <li>
                            <a href="{{route('dae')}}"> <i class="fas fa-circle"></i> DAEs Emitidos</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#indicadoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Indicadores</span></a>
                    <ul class="collapse list-unstyled" id="indicadoresSubmenu">
                        <li class="down">
                            <a href="{{route('eventos')}}"> <i class="fas fa-circle"></i> Eventos da NF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('mdfe')}}"> <i class="fas fa-circle"></i> MDF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('cte')}}"> <i class="fas fa-circle"></i> CT-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('nfe')}}"> <i class="fas fa-circle"></i> NF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('nfce')}}"> <i class="fas fa-circle"></i> NFC-e/ CF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('pagamento')}}"> <i class="fas fa-circle"></i> Meios de Pagamento</a>
                        </li>
                        <li class="down">
                            <a href="{{route('arrecadacao')}}"> <i class="fas fa-circle"></i> Arrecadação</a>
                        </li>
                        <li>
                            <a href="{{route('omissao')}}"> <i class="fas fa-circle"></i> Omissão</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#documentosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <span>Documentos Fiscais</span>
                    </a>
                    <ul class="collapse list-unstyled" id="documentosSubmenu">
                        <li class="down">
                            <a href="{{route('manifestacao')}}"> <i class="fas fa-circle"></i> Manifestação do Destinatário</a>
                        </li>
                        <li class="down">
                            <a href="{{route('arquivo-nfe')}}"> <i class="fas fa-circle"></i> Pedido de arquivo XML da NF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('arquivo-cfe')}}"> <i class="fas fa-circle"></i> Pedido de arquivo XML do CF-e</a>
                        </li>
                        <li class="down">
                            <a href="{{route('arquivo-cte')}}"> <i class="fas fa-circle"></i> Pedido de arquivo XML do CT-e</a>
                        </li>
                        <li>
                            <a href="{{route('arquivo-nfce')}}"> <i class="fas fa-circle"></i> Pedido de arquivo XML da NFC-e</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#facilitadoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Facilitadores</span></a>
                    <ul class="collapse list-unstyled" id="facilitadoresSubmenu">
                        <li class="down">
                            <a href="{{route('perguntas')}}"> <i class="fas fa-circle"></i> Perguntas Frequentes</a>
                        </li>
                        <li class="down">
                            <a href="{{route('atendimento')}}"> <i class="fas fa-circle"></i> Atendimento via Chat</a>
                        </li>
                        <li>
                            <a href="{{route('auditoria')}}"> <i class="fas fa-circle"></i> Auditoria</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button type="button" id="sidebarCollapse" class="btn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>

        <div id="content">
            @yield('content')
        </div>
    </div>
</body>



<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="{{asset('js/app.js')}}"></script>

</html>
