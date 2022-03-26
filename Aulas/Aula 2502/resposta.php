<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Calculos</h1>

    <?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    echo "Valor 1 é: $valor1 e Valor 2 é: $valor2"; 
    echo "<br>";
    echo "Valor 1 + valor 2 é: ".($valor1 + $valor2);
    echo "<br>";
    echo "Valor 1 - valor 2 é: ".($valor1 - $valor2);
    echo "<br>";
    echo "Valor 1 * valor 2 é: ".($valor1 * $valor2);
    echo "<br>";

    if ($valor2 != 0){
        echo "Valor 1 / valor 2 é: ".($valor1 / $valor2);
        echo "<br>";
    }
    else {
        echo "Não é possivel realizar divisão por zero";
        echo "<br>";
    }

    $parOuImpar = $valor1 % 2;

    if ($parOuImpar == 0){
        echo 'par';
        echo "<br>";
    }
    else{
        echo 'impar';
        echo "<br>";
    }


    ?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    
  </body>
</html>