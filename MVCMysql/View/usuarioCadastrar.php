<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário Cadastro</title>
    </head>
    <body>
        <a href='/PB_PHP/MVCMysql/usuario/listar'>Ir para tela - Listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="nome" placeholder="Seu nome" require><br><br>
            <input type="text" name="email" placeholder="Seu email" require><br><br>
            <button type="submit">Enviar</button>
        </form>   
    </body>
</html>