<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resposta Exercício 2</title>
  </head>
  <body class="container">
    <h1>Resposta Exercício 2</h1>

    <?php
        for ($i=1; $i <=20; $i++){          
                $vetor[$i] = $_POST["valor$i"];
        }

        $vetor[0] = $_POST["valor"];
        $p = 0;

        for ($i=1; $i <=20; $i++){
            if ($vetor[$i] == $vetor[0]){
                $vetorIguais[$p] = $i;
                $p++;
            }        
        }

        foreach($vetorIguais as $chave => $valor)
        {
            echo "O valor é igual na posição $valor</br>";
        }
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>