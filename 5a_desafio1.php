<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de maioridade</title>
</head>

<body>
    <form action="" method="post">

        <h2>Verificador de maioridade</h2>

        <label for="nome">Nome: </label> <br>
        <input type="text" name="nome" required> <br><br>

        <label for="nascimento">Ano de nascimento </label> <br>
        <input type="number" name="nascimento" required> <br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php

    //Verificia se o formuário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Receber os valores
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];

        //Abre/Cria arquivo (usuarios.txt) para guardar os dados
        // O "a" vem de append, que do inglês significa "acrescentar"
        $arquivo = fopen('log_acessos.txt', 'a');

        //O usuário tem de ser de maior e o ano não pode ser menor que 1900
        if ($nascimento <= 2007 && $nascimento > 1900) {
        //Cria uma linha com nome e senha separados
        $linha = 'Nome: ' . $nome . ';' . ' Ano de nascimento: ' . $nascimento . "\n";

        //Escrever a linha do arquivo
        //fwrite() escreve o conteúdo variável no arquivo
        fwrite($arquivo, $linha);

        //fclose: fechar o arquivo
        fclose($arquivo);

        //Mensagem caso permitido
        echo "<script>alert('Acesso permitido, $nome!')</script>";
    }else{
        //Mensagem caso negado
        echo "<script>alert('Acesso negado, $nome')</script>";
        }
    }
    ?>

</body>

</html>