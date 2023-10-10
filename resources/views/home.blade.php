@include('includes.top')
@include('includes.top_sistema')

    <section class=" space-top space-extra-bottom">
        <div class="container   wow fadeInUp wow-animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <h3 class="contact-box__title h4">Área Administrativa</h3>
                                <p class="contact-box__text">Bem vindo, {{ Auth::user()->name }}</p>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg background-image" style="background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="{{url('/')}}/produtos">Área de Novos Produtos</a></h3>
                        <p class="service-text">Adicione, Exclua e Faça Upload de Arquivos PDF</p>
                        <a href="{{url('/')}}/produtos" class="vs-btn style3">Acessar<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg background-image" style="background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="{{url('/')}}/editar-promocao">Novas Promoções</a></h3>
                        <p class="service-text">Adicione Produtos em Promoção de Produtos da Haloquímica</p>
                        <a href="{{url('/')}}/editar-promocao" class="vs-btn style3">Acessar<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg background-image" style="background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-3.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="{{url('/')}}/todos-produtos">Confira os Produtos</a></h3>
                        <p class="service-text">Confira Todos os Produtos da Haloquímica</p>
                        <a href="{{url('/')}}/todos-produtos" class="vs-btn style3">Acessar<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')