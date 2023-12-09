@include('includes.top')
@include('includes.top_sistema')


<?php
    # Defina a variável com a string que deseja modificar
$url_com_public = url('/');

# Use o método replace para substituir "/public" por uma string vazia
$url_sem_public = str_replace("/public", "",$url_com_public);

# Exiba a nova string
$url_sem_public;
?>
<section class="  space-extra-bottom">
        <div class="container">
            
            <div class="tab-content" id="nav-contactTabContent">
                <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                    <div class="row">
                        <div class="col-lg-8 mb-30">
                            <div class="contact-box">
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Laudos</th>
      <th scope="col">URL</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

  @if (!empty($dados))
  <h3 class="contact-box__title h4">Lista de Laudos</h3>
                                <p class="contact-box__text">Laudos Adicionados</p>
            @foreach ($dados as $produto)

            <?php $url = $produto['fispq'];
            $fispq = str_replace("storage/app/public", "download", $url);
           ?>
            <tr>
                    <td>
                        {{ $produto['id'] }}
                    </td>
                    <td>
                        {{ $produto['produto'] }}
                    </td> 
                    <td>
                    {{ $produto['categorias'] }}
                    </td> 
                    <td>
                    <a href="{{$fispq}}" target="_blank">PDF do Laudo</a>
                    </td> 
                    <td>
                    {{ $produto['url'] }}
                    </td>
                    <td>
                    <form method="post" action="{{ route('produtos.laudosexcluir', ['id' => $produto['id']]) }}">
                        @csrf
                        <input type="hidden" name="acao" value="excluir">
                        <button type="submit" class="btn-danger">Excluir</button>
                    </form>
                    </td>  
            </tr>
            @endforeach

        @else
            <p>Nenhum produto encontrado.</p>
        @endif



    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="contact-box">
                                <h3 class="contact-box__title h4">Área de Laudos</h3>
                                <p class="contact-box__text">Adicione um Laudo</p>
                                <form method="post" action="{{ route('produtos.laudoscriar') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="acao" value="criar">

        <div class="col-md-12 form-group">
            <label for="produto">Nome do Laudo:</label>
            <input type="text" name="produto" id="produto" required>
        </div>

        <div class="col-md-12 form-group">
            <label for="categorias">Nome da Categoria:</label>
            <input type="text" name="categorias" id="categorias" required>
        </div>

        <div class="col-md-12 form-group">
            <label for="fispq">Laudo (Em PDF):</label>
            <input type="file"  name="fispq" id="fispq">
        </div>

        <div>
            <button class="vs-btn" type="submit">Adicionar Laudo</button>
        </div>
    </form>
                                <p class="form-messages mb-0 mt-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')