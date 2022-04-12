<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3 Exercicio 5 Resultado</title>
  </head>
  <body class="container">

    <h1>Lista 3 Exercicio 5 Resultado</h1>

    <?php
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];

    function Imc($a, $p){
        $imc = $peso / $altura;

            if ($imc <= 18.5) echo "abaixo do peso";
            else if (16.6 <= $imc <= 24.9) echo "Peso ideal (parabéns)";
            else if (25 <= $imc <= 29.9) echo "Levemente acima do peso";
            else if (30 <= $imc <= 34.9) echo "Obesidade grau I";
            else if (35 <= $imc <= 39.9) echo "Obesidade grau II (severa)";
            else echo "Obesidade III (mórbida)";
    }

    Imc($altura, $peso);
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>