<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Haloquímica</title>
    <meta name="author" content="vecuro">
    <meta name="description" content="Haloquímica">
    <meta name="keywords" content="Haloquímica" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="manifest" href="{{url('/')}}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{url('/')}}/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">

</head>
<style>
html {
  scroll-behavior: smooth;
}
.btn-whatsapp {
    width: 225px;
    position: fixed;
    right: 15px;
    bottom: 25px;
    z-index: 99999;
}
.btn-instagram {
    width: 80px;
    position: fixed;
    left: 15px;
    bottom: 25px;
    z-index: 99999;
}
.main-header.stricky {
    opacity: 0.8 !important;
}
</style>
<a href="https://api.whatsapp.com/send?phone=551120917150&amp;text=Ol%C3%A1,%20gostaria%20de%20saber%20mais%20sobre%20a%20Haloquimica" target="_blank" class="btn-whatsapp">
<img src="https://cybertecontroledepragas.com.br/wp-content/uploads/2020/09/bot%C3%A3o-whatsapp-do-prime-gourmet.png" class="btn-whatsapp" title="Suporte Via WhatsApp" alt="Cotação Rápida por WhatsApp">
</a>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!-- Modal Laudos -->
<div class="modal fade" id="cnpjModal" tabindex="-1" role="dialog" aria-labelledby="cnpjModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cnpjModalLabel">Insira o seu CNPJ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="cnpjForm">
          <div class="form-group">
            <label for="cnpjInput">CNPJ:</label>
            <input type="text" class="form-control" id="cnpjInput" placeholder="Digite o CNPJ" oninput="mascaraCNPJ(this)" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="enviarBtn">Acessar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#enviarBtn").click(function () {
      // Obter o valor do CNPJ
      var cnpj = $("#cnpjInput").val();

      // Enviar email para rsfreelas@gmail.com com o CNPJ
      // Código para enviar o e-mail vai aqui (isso precisa ser feito no lado do servidor).

      // Redirecionar para uma página
      window.location.href = "{{url('/')}}/diretorio-de-laudos";
    });
  });

  function mascaraCNPJ(cnpjInput) {
    var cnpj = cnpjInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (cnpj.length > 14) {
      cnpj = cnpj.substring(0, 14);
    }
    cnpj = cnpj.replace(/(\d{2})(\d)/, '$1.$2');
    cnpj = cnpj.replace(/(\d{3})(\d)/, '$1.$2');
    cnpj = cnpj.replace(/(\d{3})(\d)/, '$1/$2');
    cnpj = cnpj.replace(/(\d{4})(\d)/, '$1-$2');
    cnpjInput.value = cnpj;
  }
</script>










<!-- Modal Laudos -->
<div class="modal fade" id="cnpjModalFispq" tabindex="-1" role="dialog" aria-labelledby="cnpjModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cnpjModalLabel">Insira o seu CNPJ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="cnpjForm">
          <div class="form-group">
            <label for="cnpjInputFispq">CNPJ:</label>
            <input type="text" class="form-control" id="cnpjInputFispq" placeholder="Digite o CNPJ" oninput="mascaraCNPJ(this)" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="enviarBtn2">Acessar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#enviarBtn2").click(function () {
      // Obter o valor do CNPJ
      var cnpj = $("#cnpjInputFispq").val();

      // Enviar email para rsfreelas@gmail.com com o CNPJ
      // Código para enviar o e-mail vai aqui (isso precisa ser feito no lado do servidor).

      // Redirecionar para uma página
      window.location.href = "{{url('/')}}/diretorio-de-fispq";
    });
  });

  function mascaraCNPJ(cnpjInputFispq) {
    var cnpj = cnpjInputFispq.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (cnpj.length > 14) {
      cnpj = cnpj.substring(0, 14);
    }
    cnpj = cnpj.replace(/(\d{2})(\d)/, '$1.$2');
    cnpj = cnpj.replace(/(\d{3})(\d)/, '$1.$2');
    cnpj = cnpj.replace(/(\d{3})(\d)/, '$1/$2');
    cnpj = cnpj.replace(/(\d{4})(\d)/, '$1-$2');
    cnpjInputFispq.value = cnpj;
  }
</script>
















