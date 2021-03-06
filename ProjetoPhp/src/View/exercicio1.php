<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 1</title>
  </head>
  <body class="container">
      
    <form method="POST" action="resultado.php">

        <div class="row mt-5">

            <div class="col">
                <label for="valorpago" class="label-control">Valor pago: </label>
                <input type="text" id="valorpago" name="valorpago" class="form-control">
            </div>

            <div class="col">
                <label for="valorproduto" class="label-control">Valor do produto: </label>
                <input type="text" id="valorproduto" name="valorproduto" class="form-control">
            </div>

        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-1">
            <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>

    </form>

    <?php

    if (isset($resultado)) echo "Troco: $resultado";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>