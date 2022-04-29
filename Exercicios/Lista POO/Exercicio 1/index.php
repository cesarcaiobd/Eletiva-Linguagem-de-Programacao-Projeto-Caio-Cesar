<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista POO Exercicio 1 Index</title>
  </head>
  <body>
    <h1>Lista POO Exercicio 1 Index</h1>

    <?php

    require_once("ponto.php");

    $ponto0 = new Ponto(3, 9);
    $ponto1 = new Ponto(-5, 1);

    $a = Ponto->RetornarContador();
    $b = $ponto1->DistanciaDestePontoAOutro($ponto0);
    $c = Ponto->DistanciaDeUmPontoAOutro($ponto0, $ponto1);

    echo $a;
    echo $b;
    echo $c;

    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>