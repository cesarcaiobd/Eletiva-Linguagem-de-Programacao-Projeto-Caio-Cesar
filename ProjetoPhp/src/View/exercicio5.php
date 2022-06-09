<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 5 lista 1 index</title>
  </head>
  <body class="container">
      
    <form method="POST" action="resultado.php">

        <div class="row mt-5">

            <div class="col">
                <label for="n1" class="label-control">Nota do primeiro aluno:</label>
                <input type="text" id="n1" name="n1" class="form-control">
            </div>

            <div class="col">
                <label for="n2" class="label-control">Nota do segundo aluno:</label>
                <input type="text" id="n2" name="n2" class="form-control">
            </div>
            
            <div class="col">
                <label for="n3" class="label-control">Nota do terceiro aluno:</label>
                <input type="text" id="n3" name="n3" class="form-control">
            </div>

            <div class="col">
                <label for="n4" class="label-control">Nota do quarto aluno:</label>
                <input type="text" id="n4" name="n4" class="form-control">
            </div>

        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-1">
            <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>

    </form>
    
    <?php

    if (isset($media)) echo "Média aritmética das notas: $media";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>