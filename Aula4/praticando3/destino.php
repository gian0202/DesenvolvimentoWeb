<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
<style>
    
</style>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="min-vh-100">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <?php
    $ondeclicou = filter_input(INPUT_GET, "ondeclicou", FILTER_SANITIZE_SPECIAL_CHARS);
   ;
    $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_URL);
    ?>
    <div class="container mt-5 p-4 col-md-9" style="border-radius: 10px; background-color: #cfa9eb;">
        <h1>Animail Escolhido: </h1>
        <hr>

        <form action="destino.php" method="GET">
            <div class="row">       
             <?php
             if ($ondeclicou == 'gato'){
             echo "Oi eu sou um gato";}
             if($ondeclicou == 'cao'){
             echo "oi eu sou um cachorro";}
             if($ondeclicou == 'hamsters'){
                echo "Oi eu sou um hamster" ;
             } 
             if($ondeclicou == 'largatixa'){
                 echo "oi eu sou uma largatixa";
             }

             ?>
           
          <img src="<?=$img?>" >

            </div>


        </form>
    </div>
</body>

</html>