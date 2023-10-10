



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
      <th scope="col">FISPQ</th>
      <th scope="col">URL</th>
      <th scope="col">Status Promoção</th>
    </tr>
  </thead>
  <tbody>

@if (empty($dados))
  <h3 class="contact-box__title h4">Lista de Produtos</h3>
                                <p class="contact-box__text">Produtos Adicionados</p>
                                
        @foreach ($produtos as $produto)
        @if ($produto['promocao'] == 1)
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
                    <a href="<?php echo $url_sem_public.'/'.$produto['fispq'] ?>" target="_blank">PDF do Produto</a>
                    </td> 
                    <td>
                    {{ $produto['url'] }}
                    </td>
                    <td>
                    Ativa
                    </td>  
            </tr>
            @endif
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
                                <h3 class="contact-box__title h4">Promoção</h3>
                                <p class="contact-box__text">Editar Produtos em Promoção</p>
                                <form action="{{ route('updatePromocao') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produto">Selecione o Produto:</label>
            <select name="produto" id="produto" class="form-control">
                @foreach ($produtos as $produto)
                <option value="{{ $produto['produto'] }}">{{ $produto['produto'] }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ativar / Desativar Promoção</button>
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