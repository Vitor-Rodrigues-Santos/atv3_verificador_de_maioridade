<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="" method="post">

        <h2>Cadastro de Usuário</h2>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <?php

    //Verificia se o formuário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Receber os valores
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        //Abre/Cria arquivo (usuarios.txt) para guardar os dados
        // O "a" vem de append, que do inglês significa "acrescentar"
        $arquivo = fopen('usuarios.txt', 'a');

        //Cria uma linha com nome e senha separados
        $linha = 'Nome: ' . $nome . ';' . 'Senha: ' . $senha . "\n";

        //Escrever a linha do arquivo
        //fwrite() escreve o conteúdo variável no arquivo
        fwrite($arquivo, $linha);

        //fclose: fechar o arquivo
        fclose($arquivo);

        //Mensagem
        echo "<p>Usuário cadastrado com sucesso</p>";
        echo "<script>alert('Usuário cadastrado com sucesso')</script>";
    }
    ?>

</body>

</html>