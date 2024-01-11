<body>



    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Haloquímica</span> Somos Especializados em
                            Soluções Químicas</p>
                    </div>
                    <div class="col-lg-auto">
                        <div class="header-social style-white">
                            <span class="social-title">Siga em Nossas Redes Sociais: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <?php
// Verifica se o usuário está acessando a partir de um dispositivo desktop
function isDesktop() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $desktopAgents = array('Windows', 'Macintosh', 'Linux');

    foreach ($desktopAgents as $agent) {
        if (strpos($userAgent, $agent) !== false) {
            return true;
        }
    }

    return false;
}

// Inicia a verificação
if (isDesktop()) {
    // Se for um dispositivo desktop, exibe o código HTML correspondente
    ?>


        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{url('/')}}"><span class="has-new-lable">Página Inicial</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/produtos">Área de Produtos e Fispq</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/editar-promocao">Produtos em Promoção</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/laudos">Área de Laudos</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>





                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php } ?>

    <!--==============================
      Hero Area
    ==============================-->

    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{url('/')}}"><img src="{{url('/')}}/assets/img/logo.png" alt="Haloquímica" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="{{url('/')}}"><span class="has-new-lable">Página Inicial</span></a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/produtos">Área de Produtos e Fispq</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/editar-promocao">Produtos em Promoção</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/laudos">Área de Laudos</a>
                        </li>


                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>





                    </ul>
                </ul>
            </div>
        </div>
    </div>


    <?php
    // Inicia a verificação
if (!isDesktop()) {
    // Se for um dispositivo desktop, exibe o código HTML correspondente
    ?>
    <div class="sticky-wrapper" style="">
        <div class="sticky-active">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col">
                        <div class="mobile-logo">
                            <a href="{{url('/')}}"><img src="{{url('/')}}/assets/img/logo.png" alt="TechBiz"
                                    class="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>