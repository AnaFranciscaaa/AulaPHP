<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio de PHP</h1>

    <form name="Calcular" method="POST" action="exercicio1.php">

    <p>
        Digite o nome do cliente<br>
        <input type="text" name="cliente" ><br>

    </p>

    <p>
        Digite o sexo do cliente<br>
        <input type="radio" name="sexo" value="F">Feminino <br>
        <input type="radio" name="sexo" value="M">Masculino <br>

    </p>

    <p>
        Digite o valor da compra<br>
        <input type="text" name="valorcompra"><br>

    </p>

    <p>
    
        <input type="submit" value="Calcular" name="Calcular">

    </p>
</form>

    <?php

        if(isset($_REQUEST["Calcular"])){ 
        $cliente = $_REQUEST["cliente"];
        $sexo = $_REQUEST["sexo"];
        $valorcompra = $_REQUEST["valorcompra"];

        

        if($sexo == "F"){
            $total = $valorcompra - (20/100);
        }

        if($sexo == "M"){
            $total = $valorcompra - (5/100);
        }

        echo "Nome: $cliente <br>";
        echo "Sexo: $sexo <br>";
        echo "Valor da compra: $valorcompra <br>"; 
        echo "Total da compra com desconto: $total";

        }

    ?>




    
</body>
</html>