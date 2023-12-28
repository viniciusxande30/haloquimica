<!DOCTYPE html>
<html>
<head>
    <title>Nova mensagem do formulário de contato</title>
</head>
<body>
    <h2>Nova mensagem do formulário de contato</h2>
    
    <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p><strong>Mensagem:</strong> {{ $dados['mensagem'] }}</p>
</body>
</html>