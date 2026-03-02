<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/atividade01/produto/telaCadastro">Cadastro de Produtos </a>
    <h2>Produtos Cadastrados</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade em Estoque</th>
            <th>Data de Validade</th>
            <th>Ações</th>
        </tr>
        <?php foreach($produtos as $id => $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['valor']?></td>
                <td><?= $u['quantidade']?></td>
                <td><?= $u['dataValidade']?></td> 
                <td>
                    <a href="/PB_PHP/atividade01/produto/telaEditar?id=<?= $id ?>"> Editar </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>