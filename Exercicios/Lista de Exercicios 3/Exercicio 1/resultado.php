<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3 Exercicio 1 Resultado</title>
  </head>
  <body>
    <h1>Lista 3 Exercicio 1 Resultado</h1>

    <?php

    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
    $data = date("$mes/$dia/$ano");

    if (checkdate(mes, dia, ano)){
      echo "É válida";
      echo date("w", $data);
    }
    else{
      echo "Não é válida";
    }

    ?>   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>