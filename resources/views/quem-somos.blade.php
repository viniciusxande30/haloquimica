@include('includes.top')
@include('includes.menu')
<div class="breadcumb-wrapper background-image" style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Quem Somos</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{url('/')}}">Início</a></li>
                        <li>Quem Somos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="background-image" style="background-image: url(&quot;assets/img/bg/about-bg-5-1.jpg&quot;);">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-70">
                <div class="col-lg-6 col-xl">
                    <a href="{{url('/')}}/assets/img/about/ISO_9001_2020-2023.pdf" target="_BLANK">
                    <img src="assets/img/about/ab-7-1.png" alt="Haloquímica - SGS">
                    </a>
                </div>
                <div class="col-lg-6 col-xl-auto  wow fadeInUp wow-animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="about-box2">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i> QUEM SOMOS </span>
                        <h2 class="sec-title3 h1">Haloquímica Indústria e Comércio LTDA</h2>
                        <p>A Haloquímica atua no mercado químico há mais de 20 anos, sendo especializada na fabricação de reativos, soluções especiais diversas, soluções tituladas, padronizadas e sais nobres. Com ampla linha de produtos para laboratórios , tais como vidrarias, ferragens, porcelanas, papéis filtrantes, reagentes, ligas metálicas, padrões primários, equipamentos diversos, dentre outros. Dentre as marcas que comercializamos, as principais são: - Haloquimica - Sigma - Aldrich - Riedel - Alfa - Merck - J.T.Baker – Fluka.</p>
                        <p>Soluções Diversas: <br>

Titulada e padronizada,( N, M ) fatoradas<br>
Por nome de autores como WIJS, Hannus, Selivanoff, Granavher etc.</p>
                        <div class="row gx-0 align-items-center flex-row-reverse justify-content-end mt-sm-3 pt-sm-3 mb-30 pb-10">
                            <div class="col-sm-auto">
                                <p class="author-degi">Fale com a nossa equipe:</p>
                                <h3 class="h5 author-name">Comercial</h3>
                            </div>
                            <div class="col-sm-auto">
                                <div class="about-call">
                                    <div class="about-call__icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="about-call__label">Entre em Contato Conosco</span>
                                        <p class="about-call__number"><a href="tel:+25821562154">+(11) 2091-7150</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="vs-btn">Fale Conosco<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('includes.footer')