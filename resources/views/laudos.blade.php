














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
?>

    <script>
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
</script>



















@include('includes.footer')