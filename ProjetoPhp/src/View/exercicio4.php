<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 4 lista 1 index</title>
  </head>
  <body class="container">
      
    <form method="POST" action="resultado.php">

        <div class="row mt-5">

            <div class="col">
                <label for="valor" class="label-control">Digite o valor:</label>
                <input type="text" id="valor" name="valor" class="form-control">
            </div>

        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-1">
            <button type="submit" class="btn btn-primary">Mostrar</button>
            </div>
        </div>

    </form>
    
    <?php

    if (isset($valor)){
      switch ($valor)
        {
          case $valor > 0: echo "Valor Positivo";
          break;

          case $valor < 0: echo "Valor Negativo";
          break;

          default: echo "Igual a Zero"
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>