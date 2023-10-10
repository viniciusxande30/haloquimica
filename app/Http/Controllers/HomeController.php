<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str; // Importe a classe Str para manipulação de strings

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout()
{
    Auth::logout(); // Efetua o logout do usuário
    return redirect('/'); // Redireciona para a página inicial (ou outra página desejada após o logout)
}
    

    public function exibirPorCategoria($urlCategoria)
    {
        // Lógica para buscar produtos com base na URL da categoria
        $produtos = []; // Inicialize um array vazio
        $fisqps = [];

        // Caminho para o arquivo JSON
        $caminhoJSON = storage_path('app/public/data.json');

        // Verifica se o arquivo JSON existe
        if (file_exists($caminhoJSON)) {
            $dadosJSON = file_get_contents($caminhoJSON);
            $dados = json_decode($dadosJSON, true);

            // Filtrar produtos com base na URL da categoria
            foreach ($dados as $produto) {
                if (isset($produto['url']) && $produto['url'] === $urlCategoria) {
                    $produtos[] = $produto;
                    //$fisqps[] = $fisqp;
                }
            }
        }

        return view('categoria', ['urlCategoria' => $urlCategoria, 'produtos' => $produtos]);
    }




}
