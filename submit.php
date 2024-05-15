<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triângulos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- <div class="php">
        
        $value01=$_POST['value01'];
        $value02=$_POST['value02'];
        $value03=$_POST['value03'];

        if($value01 == $value02 && $value02 == $value03 && $value03 == $value01){
            echo"<h1> É um Triângulos Equilátero </h1>";
        }elseif($value01 == $value02 || $value02 == $value03 || $value03 == $value01){
            echo"<h1> É um Triângulos Isóceles </h1>";
        } else {
            echo"<h1> É um Triângulos Escaleno </h1>";
        }

        
    </div> -->

   <!--  <div class="php">
        
        $value01=$_POST['value01'];
        
        $par= $value01 % 2;

        if($par == 0){
            echo"<h1> Este número é par </h1>";
        } else {
            echo"<h1> Este número é impar </h1>";
        }

        
    </div> -->

    <div class="php">
    <?php
        $value01=$_POST['value01'];
        $value02=$_POST['value02'];
        
        $calc = $value02 % $value01;

        if($calc <= 0.7){
            echo"<h1> É recomendado abastecer com Alcool </h1>";
        } else {
            echo"<h1> É recomendado abastecer com Gasolina </h1>";
        }

        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>