<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="min-vh-100">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
<?php
    
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"]; 
    $media = ($n1 + $n2 + $n3)/3;
    ?>
 <div class="container mt-5 p-4 col-md-6" style="border-radius: 10px; background-color: #cfa9eb;">
        <h1>Media</h1>
        <hr>
        <?php echo "A media das notas: " . $n1 . ", " . $n2 . " e " . $n3 . " é: " . $media . "</br>";
        ?>
        <?php
         if($media<4){
             echo "Aluno <span style=color:red> Reprovado </span>";
         }
         if($media>4 && $media<6){
           echo "Aluno de <span style=color:yellow>recuperação</span>";

         }
         if ($media>6){
             echo "Aluno <span style=color:green>Aprovado</span>";
         }
        ?>
        

        </form>
    </div>
 
</body>
</html>