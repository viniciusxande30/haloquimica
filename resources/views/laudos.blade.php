@include('includes.top')
@include('includes.menu')
<div class="container">
        <input type="text" id="searchInput" style="margin-bottom:40px" placeholder="Digite o Número do Lote. Ex: 050981, 050982, 050983">
        <div class="row" id="results"></div>
    </div>

    <style>
        .col-md-4 {
            flex-basis: calc(33.33% - 20px);
            margin: 10px;
            /* background-color: #dcdcdc; */
        }

        .h3-search {
            color: black;
            font-size: 15px;
        }

        .a-search:visited {
            color: black;
        }

        .a-search:hover {
            color: white;
        }

        .div-search {
            background-color: #aaaa;
        }

        .background-image {
            background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);
        }
        a{
            color:white;
            font-weight:bolder;
        }
        h3{
            color:white !important;
            font-weight:bolder;

        }
    </style>

<?php
    # Defina a variável com a string que deseja modificar
$url_com_public = url('/');

# Use o método replace para substituir "/public" por uma string vazia
$url_sem_public = str_replace("/public", "",$url_com_public);

# Exiba a nova string
$url_sem_public;
?>

    <!-- <script>
    let jsonData = []; // Variável para armazenar o JSON
    let uniqueCategories = []; // Lista de categorias únicas

    // Busca o JSON a partir da URL
    fetch('{{url('/')}}/public-json-laudos')
        .then(response => response.json())
        .then(data => {
            jsonData = data; // Armazena o JSON na variável
            uniqueCategories = [...new Set(jsonData.map(item => item.categorias))]; // Lista de categorias únicas
            displayCategories(uniqueCategories); // Exibe as categorias ao carregar a página
        })
        .catch(error => console.error('Erro ao buscar JSON:', error));

    const searchInput = document.getElementById("searchInput");
    const resultsDiv = document.getElementById("results");

    searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredCategories = uniqueCategories.filter(category =>
            category.includes(searchTerm)
        );

        displayCategories(filteredCategories);
    });

    function createSlug(string) {
    return string
        .toLowerCase() // Converte para letras minúsculas
        .trim() // Remove espaços em branco no início e no final
        .replace(/[^A-Za-z0-9-]+/g, '-') // Substitui caracteres especiais por hífens
        .replace(/-+/g, '-'); // Remove múltiplos hífens consecutivos
}
function extractFileNameFromURL(url) {
            // Divide a URL pela barra '/' e pega o último elemento do array
            const parts = url.split('/');
            const fileName = parts[parts.length - 1];
            return 'download/pdf/' + fileName;
        }

    function displayCategories(categories) {
        resultsDiv.innerHTML = "";

        categories.forEach(category => {
            const div = document.createElement("div");
            div.classList.add("col-md-4", "col-lg-4");

            const serviceDiv = document.createElement("div");
            serviceDiv.classList.add("service-style1", "div-search");

            const h3 = document.createElement("h3");
            h3.classList.add("h3-search");
            const a = document.createElement("a");
            a.classList.add("a-search");
            a.href = "#"; // Coloque a URL correta aqui, se necessário
            a.textContent = category;

            h3.appendChild(a);

            //Você pode adicionar um link para cada categoria, se necessário
            const vsBtn = document.createElement("a");
            vsBtn.href = "diretorio-de-laudos/"+createSlug(category); // Coloque a URL correta aqui, se necessário
            vsBtn.classList.add("vs-btn", "style3");
            vsBtn.textContent = "Acesse Esta Categoria";
            vsBtn.innerHTML += '<i class="far fa-long-arrow-right"></i>';

            serviceDiv.appendChild(h3);
            serviceDiv.appendChild(vsBtn);

            div.appendChild(serviceDiv);
            resultsDiv.appendChild(div);
        });
    }
</script> -->





<script>
        let jsonData = []; // Variável para armazenar o JSON
        let uniqueProducts = []; // Lista de produtos únicos

        // Busca o JSON a partir da URL
        fetch('{{url('/')}}/public-json-laudos')
            .then(response => response.json())
            .then(data => {
                jsonData = data; // Armazena o JSON na variável
                uniqueProducts = [...new Set(jsonData.map(item => item.produto))];
                // Não exibe os produtos ao carregar a página
            })
            .catch(error => console.error('Erro ao buscar JSON:', error));

        const searchInput = document.getElementById("searchInput");
        const resultsDiv = document.getElementById("results");

        searchInput.addEventListener("input", function () {
            const searchTerm = searchInput.value.toLowerCase();

            // Verifica se o comprimento da string de pesquisa é maior ou igual a 5
            if (searchTerm.length >= 5) {
                const filteredData = jsonData.filter(item =>
                    item.codigo.toLowerCase().includes(searchTerm)
                );
                displayResults(filteredData);
            } else {
                // Se o comprimento for menor que 5, não exibe nenhum resultado
                resultsDiv.innerHTML = "";
            }
        });
        function extractFileNameFromURL(url) {
            // Divide a URL pela barra '/' e pega o último elemento do array
            const parts = url.split('/');
            const fileName = parts[parts.length - 1];
            return 'download/pdf_laudos/' + fileName;
        }

        function displayResults(data) {
            resultsDiv.innerHTML = "";

            data.forEach(item => {
                const div = document.createElement("div");
                div.classList.add("col-md-4", "col-lg-4");

                const serviceDiv = document.createElement("div");
                serviceDiv.classList.add("service-style1", "div-search");

                const h3 = document.createElement("h3");
                h3.classList.add("h3-search");
                const a = document.createElement("a");
                a.classList.add("a-search");
                a.href = "#"; // Coloque a URL correta aqui, se necessário
                a.textContent = item.produto;
                h3.textContent = 'Lote: '+ item.codigo  + ' - ';

                h3.appendChild(a);

                // Você pode adicionar um link para cada item, se necessário
                const vsBtn = document.createElement("a");
                // vsBtn.href = "fale-conosco/"; // Coloque a URL correta aqui, se necessário
                vsBtn.classList.add("vs-btn", "style3");
                // vsBtn.textContent = "Entre em Contato";
                // vsBtn.innerHTML += '<i class="far fa-long-arrow-right"></i>';


                vsBtn.href = '{{$url_sem_public}}/public/' + extractFileNameFromURL(item.fispq);;
                    vsBtn.textContent = "Confira o Laudo";
                    vsBtn.innerHTML += '<i class="far fa-long-arrow-right"></i>';

                serviceDiv.appendChild(h3);
                serviceDiv.appendChild(vsBtn);

                div.appendChild(serviceDiv);
                resultsDiv.appendChild(div);
            });
        }
    </script>


<div class="container">
<div class="tab-content" id="nav-contactTabContent">
                <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box align-items-center">
                                <h2 class="contact-box__title h4">Não Encontrou o Laudo?</h3>
                                <p class="contact-box__text">Não se Preocupe! Entre em Contato Conosco por E-mail, Que Logo Retornaremos o Contato</p>
                               <img class="image-box img-responsive" src="https://www.despachantedok.com.br/blog/wp-content/uploads/2022/01/como-solicitar-isencao-ipva-rs-dok-1024x1024.png">
                                
                               
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box">
                                <h2 class="contact-box__title h4">Entre em Contato Conosco</h3>
                                <p class="contact-box__text">Preencha o Formulário</p>
                                <form class="contact-box__form" action="{{url('/')}}/contato/enviar" method="POST">
                                @csrf
                                    <div class="row gx-20">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="nome" id="name" placeholder="Seu Nome">
                                            <i class="fal fa-user"></i>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" name="email" id="email" placeholder="Seu E-mail">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        
                                        <div class="col-12 form-group">
                                            <textarea name="mensagem" id="message" placeholder="Escreva sua Mensagem"></textarea>
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
    </div>












@include('includes.footer')