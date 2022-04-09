<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 2 Exercicio 5 index</title>
  </head>
  <body>
    <h1>Lista 2 Exercicio 5 index</h1>

    <form action="resultado.php" method="post">
    
    <div class="row">

        <?php
          for ($i = 1; $i <= 10; $i++){
        ?>

        <div class="col">

          <label for="valor<?= $i ?>" class="label-control"> Informe o valor <?= $i ?> </label>
          <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control">

        </div>

    <?php
      }
    ?>

    <div class="row">
        <div class="col">
            <button class="btn btn-primary"> Enviar </button>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>