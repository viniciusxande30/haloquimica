<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Formulário de Contato</h2>

    @if(session('mensagem'))
        <p style="color: green;">{{ session('mensagem') }}</p>
    @endif

    <form method="post" action="{{ url('/contato/enviar') }}">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required></textarea>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>