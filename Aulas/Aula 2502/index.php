<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>Exemplo de envio de Formulário</h1>

    <form method="post" action="resposta.php">

    <div class="row">
    <div class="col">
        <label for="valor1" class="label-control">
            Informe o valor 1: 
        </label>
        <input type="number" name="valor1" id="valor1" class="form-control">
    </div>
    <div class="col">
        <label for="valor2" class="label-control">
            Informe o valor 2: 
        </label>
        <input type="number" name="valor2" id="valor2" class="form-control">
    </div>
    </div>

    <div class="row mt-5">
                <div class="col">
                    <button type="submit" class="btn btn-danger">
                        Enviar
                    </button>
                </div>
    </div>

    </form>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>