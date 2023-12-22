<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Importe a classe Str para manipulação de strings


class ProdutoController extends Controller
{
    public function index()
    {
        $dados = $this->lerDadosJSON();
        return view('produtos.index', compact('dados'));
    }

    public function criar(Request $request)
    {
        $produtoNome = $request->input('produto');
        $categorias = $request->input('categorias'); // Categorias separadas por vírgula
        $urlNome = Str::slug($request->input('produto'));
        $fispq = null;

        if ($request->hasFile('fispq') && $request->file('fispq')->isValid()) {
            $extensao = $request->file('fispq')->getClientOriginalExtension();
            $novoNomeArquivo = uniqid('pdf_') . '.' . $extensao;
            $request->file('fispq')->storeAs('public/pdf', $novoNomeArquivo);
            $fispq = 'storage/app/public/pdf/'.$novoNomeArquivo;
        }
        $promocao = 0;

        $dados = $this->lerDadosJSON();

        $novoProduto = [
            'id' => count($dados) + 1,
            'produto' => $produtoNome,
            'categorias' => $categorias,
            'url' => $urlNome,
            'fispq' => $fispq,
            'promocao' => $promocao,
        ];

        $dados[] = $novoProduto;
        $this->salvarDadosJSON($dados);

        return redirect()->route('produtos.index');
    }

    public function excluir($id)
    {
        $dados = $this->lerDadosJSON();
        $produtoEncontrado = false;

        foreach ($dados as $key => $produto) {
            if ($produto['id'] == $id) {
                // Remove o arquivo PDF, se existir
                if (!empty($produto['fispq'])) {
                    Storage::delete('public/' . str_replace('storage/', '', $produto['fispq']));
                }
                unset($dados[$key]);
                $produtoEncontrado = true;
                break;
            }
        }

        if ($produtoEncontrado) {
            $dados = array_values($dados);
            $this->salvarDadosJSON($dados);
        }

        return redirect()->route('produtos.index');
    }

    private function lerDadosJSON()
    {
        $jsonFile = storage_path('app/public/data.json');

        if (file_exists($jsonFile)) {
            $json_data = file_get_contents($jsonFile);
            $dados = json_decode($json_data, true);

            // Verifica se "categorias" já existe em cada entrada e adiciona se necessário
            foreach ($dados as &$produto) {
                if (!isset($produto['categorias'])) {
                    $produto['categorias'] = [];
                }
            }

            return $dados;
        }

        return [];
    }

    private function salvarDadosJSON($dados)
    {
        $jsonFile = storage_path('app/public/data.json');

        // Remove referências às categorias se elas estiverem vazias
        foreach ($dados as &$produto) {
            if (empty($produto['categorias'])) {
                unset($produto['categorias']);
            }
        }

        $json_data = json_encode($dados, JSON_PRETTY_PRINT);
        file_put_contents($jsonFile, $json_data);
    }

















    public function laudos()
    {
        $dados = $this->laudoslerDadosJSON();
        return view('produtos.laudos', compact('dados'));
    }

    public function laudoscriar(Request $request)
    {
        $produtoNome = $request->input('produto');
        $codigoLote = $request->input('codigo');
        $categorias = $request->input('categorias'); // Categorias separadas por vírgula
        $urlNome = Str::slug($request->input('produto'));
        $fispq = null;

        if ($request->hasFile('fispq') && $request->file('fispq')->isValid()) {
            $extensao = $request->file('fispq')->getClientOriginalExtension();
            $novoNomeArquivo = uniqid('pdf_') . '.' . $extensao;
            $request->file('fispq')->storeAs('public/pdf_laudos', $novoNomeArquivo);
            $fispq = 'storage/app/public/pdf_laudos/'.$novoNomeArquivo;
        }
        $promocao = 0;

        $dados = $this->laudoslerDadosJSON();

        $novoProduto = [
            'id' => count($dados) + 1,
            'produto' => $produtoNome,
            'codigo' => $codigoLote,
            'categorias' => $categorias,
            'url' => $urlNome,
            'fispq' => $fispq,
            'promocao' => 0,
        ];

        $dados[] = $novoProduto;
        $this->laudossalvarDadosJSON($dados);

        return redirect()->route('produtos.laudos');
    }

    public function laudosexcluir($id)
    {
        $dados = $this->laudoslerDadosJSON();
        $produtoEncontrado = false;

        foreach ($dados as $key => $produto) {
            if ($produto['id'] == $id) {
                // Remove o arquivo PDF, se existir
                if (!empty($produto['fispq'])) {
                    Storage::delete('public/' . str_replace('storage/', '', $produto['fispq']));
                }
                unset($dados[$key]);
                $produtoEncontrado = true;
                break;
            }
        }

        if ($produtoEncontrado) {
            $dados = array_values($dados);
            $this->laudossalvarDadosJSON($dados);
        }

        return redirect()->route('produtos.laudos');
    }

    private function laudoslerDadosJSON()
    {
        $jsonFile = storage_path('app/public/data_laudos.json');

        if (file_exists($jsonFile)) {
            $json_data = file_get_contents($jsonFile);
            $dados = json_decode($json_data, true);

            // Verifica se "categorias" já existe em cada entrada e adiciona se necessário
            foreach ($dados as &$produto) {
                if (!isset($produto['categorias'])) {
                    $produto['categorias'] = [];
                }
            }

            return $dados;
        }

        return [];
    }

    private function laudossalvarDadosJSON($dados)
    {
        $jsonFile = storage_path('app/public/data_laudos.json');

        // Remove referências às categorias se elas estiverem vazias
        foreach ($dados as &$produto) {
            if (empty($produto['categorias'])) {
                unset($produto['categorias']);
            }
        }

        $json_data = json_encode($dados, JSON_PRETTY_PRINT);
        file_put_contents($jsonFile, $json_data);
    }
    public function laudosserveFile($filename)
    {
        $filePath = 'public/pdf_laudos/' . $filename;
        
        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        abort(404); // Retorna um erro 404 se o arquivo não for encontrado
    }
    public function laudosgetJsonFile()
    {
        $filePath = storage_path('app/public/data_laudos.json');
        
        if (file_exists($filePath)) {
            return response()->file($filePath);
        }

        abort(404); // Retorna um erro 404 se o arquivo não for encontrado
    }























    public function editarPromocao()
    {
        // Carregue o arquivo JSON
        $jsonPath = storage_path('app/public/data.json');
        $produtos = json_decode(file_get_contents($jsonPath), true);

        return view('editar-promocao', ['produtos' => $produtos]);
    }

    public function updatePromocao(Request $request)
{
    $produtoNome = $request->input('produto');
    $jsonPath = storage_path('app/public/data.json');
    $produtos = json_decode(file_get_contents($jsonPath), true);

    // Encontre o produto pelo nome
    foreach ($produtos as &$produto) {
        if ($produto['produto'] === $produtoNome) {
            // Alterne o valor do campo "promocao" entre 0 e 1
            $produto['promocao'] = ($produto['promocao'] === "1") ? "0" : "1";
            break;
        }
    }

    // Salve o JSON atualizado
    file_put_contents($jsonPath, json_encode($produtos, JSON_PRETTY_PRINT));

    return redirect('/editar-promocao')->with('success', 'Promoção atualizada com sucesso!');
}




    public function serveFile($filename)
    {
        $filePath = 'public/pdf/' . $filename;
        
        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        abort(404); // Retorna um erro 404 se o arquivo não for encontrado
    }

    public function getJsonFile()
    {
        $filePath = storage_path('app/public/data.json');
        
        if (file_exists($filePath)) {
            return response()->file($filePath);
        }

        abort(404); // Retorna um erro 404 se o arquivo não for encontrado
    }




}
