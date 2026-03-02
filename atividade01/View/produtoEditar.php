<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/atividade01/produto/listar">Lista de Produtos</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome'])?>" require>
        <input type="number" name="valor" value="<?= htmlspecialchars($produto['valor'])?>" require>
        <input type="number" name="quantidade" value="<?= htmlspecialchars($produto['quantidade'])?>" require>
        <input type="date" name="dataValidade" value="<?= htmlspecialchars($produto['dataValidade'])?>" require>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>