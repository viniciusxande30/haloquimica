











<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$itemUrl = explode('/', $currentUrl);
$itemUrl = end($itemUrl);
//echo $itemUrl;

$currentUrl = $_SERVER['REQUEST_URI'];
$itemUrl = explode('/', $currentUrl);
$itemUrl = end($itemUrl);
//echo $itemUrl;

$jsonUrl = url('/').'/public-json';
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);

$jsonData = file_get_contents($jsonUrl, false, $context);
// JSON original




// Converte o JSON em um array associativo
$data = json_decode($jsonData, true);

// URL atual da categoria (substitua pela sua URL)
$urlCategoria = $itemUrl;

// Função para padronizar as categorias
function padronizarCategoria($categoria) {
    return str_replace(' ', '-', strtolower($categoria));
}

// Verifica se o JSON original não está vazio
if (!empty($data)) {
    // Filtra os itens com a categoria correspondente à URL após padronização
    $resultadosFiltrados = array_filter($data, function ($item) use ($urlCategoria) {
        $categoriaPadronizada = padronizarCategoria($item['categorias']);
        $urlCategoriaPadronizada = padronizarCategoria($urlCategoria);
        return $categoriaPadronizada === $urlCategoriaPadronizada;
    });

    // Converte os resultados filtrados de volta para JSON
    $novoJsonData = json_encode(array_values($resultadosFiltrados), JSON_PRETTY_PRINT);

    // Saída do novo JSON
    // echo $novoJsonData;
} else {
    // echo "JSON original vazio ou inválido.";
}

?>


@include('includes.top')
@include('includes.menu')
<div class="container">
        <input type="text" id="searchInput" style="margin-bottom:40px" placeholder="Digite o nome do produto">
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
    </style>

<?php
    # Defina a variável com a string que deseja modificar
$url_com_public = url('/');

# Use o método replace para substituir "/public" por uma string vazia
$url_sem_public = str_replace("/public", "",$url_com_public);

# Exiba a nova string
$url_sem_public;

// $url = $produto['fispq'];
// $fispq = str_replace("storage/app/public", "download", $url);
// echo $fispq;


$urlSpecial = str_replace("/diretorio-de-fispq", "",url('/'));
//echo $urlSpecial;
?>


<script>
        let jsonData = {!! $novoJsonData !!}; // Variável para armazenar o JSON

        const searchInput = document.getElementById("searchInput");
        const resultsDiv = document.getElementById("results");

        displayResults(jsonData); // Exibe todos os produtos ao carregar a página

        searchInput.addEventListener("input", function () {
            const searchTerm = searchInput.value.toLowerCase();
            const filteredData = jsonData.filter(item =>
                item.produto.toLowerCase().includes(searchTerm)
            );

            displayResults(filteredData);
        });

        function extractFileNameFromURL(url) {
            // Divide a URL pela barra '/' e pega o último elemento do array
            const parts = url.split('/');
            const fileName = parts[parts.length - 1];
            return 'download/pdf/' + fileName;
        }

        function displayResults(data) {
            resultsDiv.innerHTML = "";

            if (data.length === 0) {
                // Se nenhum resultado for encontrado, exiba uma mensagem
                resultsDiv.textContent = "Nenhum produto encontrado.";
                return;
            }

            data.forEach(item => {
                const div = document.createElement("div");
                div.classList.add("col-md-4", "col-lg-4");

                const serviceDiv = document.createElement("div");
                serviceDiv.classList.add("service-style1", "div-search");

                const h3 = document.createElement("h3");
                h3.classList.add("h3-search");
                const a = document.createElement("a");
                a.classList.add("a-search");
                // Use a URL dinâmica do item
                a.href = '{{$url_sem_public}}/categoria/' + item.url;
                a.textContent = item.produto;

                h3.appendChild(a);

                const vsBtn = document.createElement("a");
                vsBtn.classList.add("vs-btn", "style3");

                if (item.fispq !== null) {
                    // Se o campo fispq não for nulo, configure o link
                    vsBtn.href = '{{$url_sem_public}}/public/' + extractFileNameFromURL(item.fispq);
                    vsBtn.textContent = "Confira a FISPQ";
                    vsBtn.innerHTML += '<i class="far fa-long-arrow-right"></i>';
                } else {
                    // Se o campo fispq for nulo, mostre a mensagem "Entre em Contato"
                    vsBtn.href = '{{url('/')}}'+'/fale-conosco';
                    vsBtn.textContent = "Entre em Contato";
                }

                serviceDiv.appendChild(h3);
                serviceDiv.appendChild(vsBtn);

                div.appendChild(serviceDiv);
                resultsDiv.appendChild(div);
            });
        }
    </script>






















@include('includes.footer')