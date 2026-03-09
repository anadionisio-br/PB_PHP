<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
    <body>
        <h2>Editar Livros </h2>
        <a href='/PB_PHP/situacao_aprendizagem/livro/listar'> Listar Livros </a>
        <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled><br><br>
            <input type="text" name="titulo" value="<?= htmlspecialchars($livro['titulo'])?>" require><br><br>
            <input type="text" name="autor" value="<?= htmlspecialchars($livro['autor'])?>" require><br><br>
            <input type="date" name="ano_publicacao" value="<?= htmlspecialchars($livro['ano_publicacao'])?>" require><br><br>
            <input type="text" name="editora" value="<?= htmlspecialchars($livro['editora'])?>" require><br><br>
            <button type="submit">Editar</button>
        </form>  
    </body>
</html>