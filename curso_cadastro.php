<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>
    <form name="Enviar" method="POST" action="curso_cadastro.php">
        <p>Informe o nome do curso</p>
        <input type="text" name="curso"><br>

        <p>Informe o nome do coordenador</p>
        <input type="text" name="coordenador"><br>

        <p><input type="submit" name="Enviar" value="Cadastrar Curso"></p>
    </form>

</body>
</html>