<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <!-- Font Family Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#">
                    <span class="title">Templete</span>
                </a>
            </div>
            <p>Dashboard</p>
            <ul class="list-unstyled components">
                <li class="background">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Dashboard<span></a>
                </li>
                <li class="background">
                    <a href="#contribuinteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <span>Contribuinte</span>
                    </a>
                    <ul class="collapse list-unstyled" id="contribuinteSubmenu">
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Dados Cadastrais</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#escrituracaoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Escrituração Fiscal Digital</span></a>
                    <ul class="collapse list-unstyled" id="escrituracaoSubmenu">
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#debitosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Débitos Fiscais</span></a>
                    <ul class="collapse list-unstyled" id="debitosSubmenu">
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#indicadoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Indicadores</span></a>
                    <ul class="collapse list-unstyled" id="indicadoresSubmenu">
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#documentosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <span>Documentos Fiscais</span>
                    </a>
                    <ul class="collapse list-unstyled" id="documentosSubmenu">
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                    </ul>
                </li>
                <li class="background">
                    <a href="#facilitadoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span>Facilitadores</span></a>
                    <ul class="collapse list-unstyled" id="facilitadoresSubmenu">
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li class="down">
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-circle"></i> Apuração EFD</a>
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


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Scrollbar Publin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom JS -->
<script src="{{asset('js/dashboard.js')}}"></script>


</html>
