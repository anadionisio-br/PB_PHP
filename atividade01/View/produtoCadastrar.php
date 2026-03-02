<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/atividade01/produto/listar">Lista de Produtos</a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Nome do Produto" require><br><br>
        <input type="number" name="valor" placeholder="Valor do Produto" require><br><br>
        <input type="number" name="quantidade" placeholder="Quantidade em Estoque" require><br><br>
        <input type="date" name="dataValidade" placeholder="Data de Validade" require><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
