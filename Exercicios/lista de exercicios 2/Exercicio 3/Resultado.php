!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Lista 2 Exercicio 2 Resultado</h1>

   
    <?php
        for ($i=1; $i <=5; $i++){          
                $vetor[$i] = $_POST["valor$i"];
        }

        foreach($vetor as $chave => $valor){
            $contador = 0;
            $valorIgual = $valor;

            foreach($vetor as $v){
                if ($valorIgual == $v){
                    $contador++;
                }
            }

            if ($contador > 1){
                $vetor[$chave] = "-";
                
            }
        }

        foreach($vetor as $valor){
            echo $valor;
        }
        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>