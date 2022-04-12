<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3 Exercicio 4 Resultado</title>
  </head>
  <body class="container">
    <h1>Lista 3 Exercicio 4 Resultado</h1>

    <?php
    for($i = 0; $i < 5; $i++){
        $numero = $_POST["n$i"];
    }

    function SomaDosDivisores($n){
        $i = 0;
        $somaDeDivisiveis = 0;
        for ($d = $n; $d > 0; $d--){
            if ($n % $d == 0 && $s != $d){
                $somaDeDivisiveis += $d;
                $vetorDeDivisiveis[$i] = $d;
                $i++
            }
        }

        $ultimoValor = $vetorDeDivisiveis[0];
        sort($vetorDeDivisiveis);

        echo "divisores de $n: ";

        foreach ($vetorDeDivisiveis as $divisivel){
            if ($ultimoValor != $divisivel) echo "$divisivel+";
            else echo "$divisivel = $somaDeDivisiveis"; ?></br><?
        }
    }
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>