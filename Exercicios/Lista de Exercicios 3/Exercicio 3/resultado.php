<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3 Exercicio 3 Resultado</title>
  </head>
  <body class="container">
    <h1>Lista 3 Exercicio 3 Resultado</h1>

    <?php
    $v[0] = $_POST["n0"];
    $v[1] = $_POST["n1"];

    function MenorNumero($pv, $sv){
        if (pv >= sv){
            return $sv;
        }
        else{
            return $pv;
        }
    }

    echo MenorNumero($v[0], $v[1]);

    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>