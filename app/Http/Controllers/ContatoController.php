<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarMensagem; // Certifique-se de ter criado essa classe de Mailable

class ContatoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    public function enviarMensagem(Request $request)
    {
        $destinatarios = [
            'comercial2@rsweb.com.br' => 'Nome Destinatário 1',
            'admin@haloquimica.com.br' => 'Nome Destinatário 2',
            // Adicione mais destinatários conforme necessário
        ];
        
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
        ]);

        // Envio do e-mail
        $dadosEmail = [
            'nome' => $request->nome,
            'email' => $request->email,
            'mensagem' => $request->mensagem,
        ];

        foreach ($destinatarios as $email => $nome) {
            Mail::to($email, $nome)->send(new EnviarMensagem($dadosEmail));
        }


        return redirect()->back()->with('mensagem', 'E-mail enviado com sucesso!');
    }
}