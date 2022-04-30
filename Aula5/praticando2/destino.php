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
    
    $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_SPECIAL_CHARS);
    $final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_SPECIAL_CHARS);
    $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_SPECIAL_CHARS);
   if($final > $inicio)
   for ($i=$inicio; $i<=$final; $i+=$incremento){
       echo $i . "<br>";
   }
 else 
   if($inicio > $final){
    for ($i=$inicio; $i>=$final; $i-=$incremento){
        echo $i . "<br>";
   }
   }
   ?>   
   
      

  


</body>
</html>