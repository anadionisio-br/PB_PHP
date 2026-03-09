<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <a href='/PB_PHP/situacao_aprendizagem/livro/telaCadastro'> Tela Cadastro </a>
    <h2>Livros</h2>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Editora</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?= $u['titulo']?></td>
                <td><?= $u['autor']?></td>
                <td><?= $u['ano_publicacao']?></td>
                <td><?= $u['editora']?></td>
                <td> 
                    <a href="/PB_PHP/situacao_aprendizagem/livro/telaEditar?id=<?= $u['ID'] ?>">Editar</a><br><br>
                    <a href="/PB_PHP/situacao_aprendizagem/livro/excluir?id=<?= $u['ID'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>