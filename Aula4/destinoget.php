<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>
    <h1>Destino :</h1>

    <hr>

    <?php
    
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    
    ?>
        <?php
echo $nome . " " . $email
?>
    <p>
   <a href="destinoget.php?nome=Gian&email=gianfloreal@gmail.com">
       Nome: Gian 
   </a>
   <br>
   <a href="destinoget.php?nome=Jose+Donizete&email=josedonizete@gmail.com">Nome: Jose</a>
   <br>
    <a href="destinoget.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightblue">Cor Azul</a>
     <br>
   
    <a href="destinoget.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightgreen">Cor Azul Claro</a>
    <br>
    <a href="destinoget.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightcoral">Cor Verde Claro</a>

</p>

   <style>
    body{
    background-color: <?= $cor;?>;
  
    }

   </style>
    



</body>
</html>