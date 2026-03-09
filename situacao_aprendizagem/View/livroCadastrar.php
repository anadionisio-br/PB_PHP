<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Cadastro de Livros </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastro Livros</title>
    </head>
    <body>
        <a href='/PB_PHP/situacao_aprendizagem/livro/listar'> Listar Livros </a>
        <form method="POST" action="salvar">
            <input type="text" name="titulo" placeholder="Titulo" require><br><br>
            <input type="text" name="autor" placeholder="Autor" require><br><br>
            <input type="date" name="ano_publicacao" placeholder="Ano de Publicação" require><br><br>
            <input type="text" name="editora" placeholder="Editora" require><br><br>
            <button type="submit">Enviar</button>
        </form> 
    </body>
</html>