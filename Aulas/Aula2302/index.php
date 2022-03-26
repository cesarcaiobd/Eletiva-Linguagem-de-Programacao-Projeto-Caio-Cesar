<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>
      Olá! Hoje é dia 
      <?php echo "<p>".date('d/m/Y')."</p>"; 
      $umaVarivel = 20;
      $umaVariavel = "Antedeguemon";
      //echo "Meu nome é: ".$umaVariavel;
      echo "Meu nome é: $umaVariavel";
      //echo 'Meu nome é: $umaVariavel';
      $total = 30 * 10 / 2 - 4 + 1;
      $total++;
      $total--;
      --$total;
      echo $total;
      ?>
    </h1>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>