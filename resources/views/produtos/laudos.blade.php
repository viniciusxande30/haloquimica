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




<style>
    /* Estilo para o botão fixo */
    .fixed-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        padding: 15px;
        background-color: #007bff;
        /* Azul do Bootstrap */
        color: #fff;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        font-size: 20px;
        z-index: 999;
    }
</style>
<!-- Botão Fixo -->
<!-- Botão Fixo -->
<button type="button" class="fixed-button" data-toggle="modal" data-target="#myModal">
    <span style="font-weight:bolder;font-size:25px;text-align:center;margin-bottom:50px">+</span>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Adicione um Novo Laudo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                            <form method="post" action="{{ route('produtos.laudoscriar') }}"
                                enctype="multipart/form-data">
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
                                    <label for="codigo">Código do Lote:</label>
                                    <input type="text" name="codigo" id="codigo" required>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="fispq">Laudo (Em PDF):</label>
                                    <input type="file" name="fispq" id="fispq">
                                </div>

                                <div class="text-center">
                                    <button class="vs-btn" type="submit">Adicionar Laudo</button>
                                </div>
                            </form>
                           
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>










<section class="  space-extra-bottom">
    <div class="container">

        <div class="tab-content" id="nav-contactTabContent">
            <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel"
                aria-labelledby="nav-GermanyAddress-tab">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="contact-box">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Código</th>
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
                                            {{ $produto['codigo'] }}
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
                                            <form method="post"
                                                action="{{ route('produtos.laudosexcluir', ['id' => $produto['id']]) }}">
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')