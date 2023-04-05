<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE CLIENTES</title>
</head>
<body>
<h1>Cadastro de Clientes</h1>    
<form action="post" action="salvar.php">
    Nome:<input name="nome" maxlength="50"><br>
    Telefone:<input type="tel" maxlength="13" name="telefone"><br>
    Cidade:<input name="cidade" maxlength="40"><br>
    <button type="submit">Salvar Cliente</button>
</form>
</body>
</html>