<div class="container">
<input type="text" id="searchInput" style="margin-bottom:40px" placeholder="Digite o nome do produto">
    <div class="row" id="results"></div>

    <style>
        .col-md-6 {
            flex-basis: calc(50% - 20px);
            margin: 10px;
            background-color:#dcdcdc;
        }
        .h3-search{
            color:black;
            font-size:15px;
        }
        a:visited{
            color:black;
        }
        a:hover{
            color:white;
        }
        .div-search{
           background-color: #aaaa;
        }
        .background-image{
            background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);
        }
    </style>
<!-- <div class="service-bg background-image" style="background-image: url(&quot;assets/img/bg/sr-box-bg-1.jpg&quot;);"></div> -->
    <script>
        let jsonData = []; // Variável para armazenar o JSON

        // Busca o JSON a partir da URL
        fetch('{{url('/')}}/assets/produtos.json')
            .then(response => response.json())
            .then(data => {
                jsonData = data; // Armazena o JSON na variável
            })
            .catch(error => console.error('Erro ao buscar JSON:', error));

        const searchInput = document.getElementById("searchInput");
        const resultsDiv = document.getElementById("results");

        searchInput.addEventListener("input", function () {
            const searchTerm = searchInput.value.toLowerCase();
            const filteredData = jsonData.filter(item =>
                item.produto.toLowerCase().includes(searchTerm)
            );

            displayResults(filteredData);
        });

        function displayResults(data) {
            resultsDiv.innerHTML = "";

            data.forEach(item => {
                const div = document.createElement("div");
                div.classList.add("col-md-4", "col-lg-4");

                const serviceDiv = document.createElement("div");
                serviceDiv.classList.add("service-style1","div-search");

                const h3 = document.createElement("h3");
                h3.classList.add("h3-search");
                const a = document.createElement("a");
                a.classList.add("a-search");
                a.href = "#"; // Coloque a URL correta aqui, se necessário
                a.textContent = item.produto;

                h3.appendChild(a);

                const vsBtn = document.createElement("a");
                vsBtn.href = "#"; // Coloque a URL correta aqui, se necessário
                vsBtn.classList.add("vs-btn", "style3");
                vsBtn.textContent = "Entre em Contato";
                vsBtn.innerHTML += '<i class="far fa-long-arrow-right"></i>';

                serviceDiv.appendChild(h3);
                serviceDiv.appendChild(vsBtn);

                div.appendChild(serviceDiv);
                resultsDiv.appendChild(div);
            });
        }
    </script>
</div>
