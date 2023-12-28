@include('includes.top')
@include('includes.menu')


<div class="breadcumb-wrapper background-image" style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);margin-bottom:30px">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Licenças e Certificações
                    <ul class="breadcumb-menu">
                        <li><a href="{{url('/')}}">Início</a></li>
                        <li>Licenças e Certificações</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-contactTabContent">
                <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box align-items-center">
                                <h3 class="contact-box__title h4">Confira Nossas Licenças e Certificações</h3>
                                <p class="contact-box__text">Entre em Contato Conosco, Temos os Melhores Preços do Mercado</p>
                                <a href="{{url('/')}}/assets/img/about/tabela_promocao.pdf" target="_BLANK"><img class="image-box img-responsive" src="{{url('/')}}/assets/img/about/pdf_image.png"></a>
                                
                               
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box">
                                <h3 class="contact-box__title h4">Entre em Contato Conosco</h3>
                                <p class="contact-box__text">Preencha o Formulário</p>
                                <form class="contact-box__form ajax-contact" action="mail.php" method="POST">
                                    <div class="row gx-20">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" id="name" placeholder="Seu Nome">
                                            <i class="fal fa-user"></i>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" name="email" id="email" placeholder="Seu E-mail">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        
                                        <div class="col-12 form-group">
                                            <textarea name="message" id="message" placeholder="Escreva sua Mensagem"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="vs-btn">Enviar Mensagem<i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages mb-0 mt-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@include('includes.footer')