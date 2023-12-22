<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




   
   
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Haloquímica</span> Somos Especializados em Soluções Químicas</p>
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
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img src="{{url('/')}}/assets/img/logo.png" alt="Haloquímica" class="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto header-info ">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Entre em Contato Conosco</span>
                            <div class="header-info_link"><a href="tel:+26921562148">Fone: (11) 2091-7150</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Fale Conosco por E-mail</span>
                            <div class="header-info_link"><a href="mailto:halo@haloquimica.com.br">halo@haloquimica.com.br</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/quem-somos">Quem Somos</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/produtos-e-servicos">Produtos e Serviços</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/produtos-em-promocao">Promoção<span class="new-label">Confira!</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/tabela-de-precos">Tabela de Preços</a>
                                    </li>
                                    <li>
                                    <a href="#" data-toggle="modal" data-target="#cnpjModal">Laudos</a>
                                    </li>
                                    <li>
                                    <a href="#" data-toggle="modal" data-target="#cnpjModalFispq">FISPQ (FDS)</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/pesquisa-de-satisfacao">Pesquisa de Satisfação</a>
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
                <li class="menu-item-has-children">
                    <a href="{{url('/')}}"><span class="has-new-lable">Home</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/quem-somos">Quem Somos</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/produtos-e-servicos">Produtos e Serviços</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/produtos-em-promocao">Promoção</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/tabela-de-precos">Tabela de Preços</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/pesquisa-de-satisfacao">Pesquisa de Satisfação</a>
                                    </li>
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
                <a href="{{url('/')}}"><img src="{{url('/')}}/assets/img/logo.png" alt="TechBiz" class="logo"></a>
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