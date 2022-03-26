<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resposta Exercício 1</title>
  </head>
  <body class="container">
    <h1>Resposta Exercício 1</h1>

    <?php

        for ($i=1; $i<=10; $i++){
            $vetor[$i] = $_POST["valor$i"];
        }

        $posicao = 0;
        $maior = 0;
      
        foreach($vetor as $chave => $valor)
        {
            echo "Posição do Vetor: $chave e seu valor é $valor";
            echo "<br>";
            if ($valor > $maior){
                $maior = $valor;
                $posicao = $chave;
            }
        }

        echo "O maior valor é $maior e está na posição $posicao";

    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>