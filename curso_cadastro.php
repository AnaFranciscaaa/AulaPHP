<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
     <?php include "menu.php" ?>

     <div class="conteudo">

    <h1>Cadastro de Curso</h1>

        <form name="Enviar" method="POST" action="curso_cadastro1.php">

            <p>Informe o nome do curso</p>
            <input type="text" name="curso"><br>

            <p>Informe o nome do coordenador</p>
            <input type="text" name="coordenador"><br>

            <p><input type="submit" name="enviar" value="Cadastrar"></p>
        </form>
    </div>
</body>
</html>