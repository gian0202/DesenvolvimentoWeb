<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>
    <?php
    
    $titulo = $_GET["titulo"];
    $corpo = $_GET["corpo"];
    $urlLink = $_GET["urlLink"];
    $urlImagem = $_GET["urlImagem"];
    $corTexto = $_GET["corTexto"];
    $corPagina = $_GET["corPagina"]; 
    ?>

    <style>
        body{
            background-color: <?php echo $corPagina; ?>;
            color: <?php echo $corTexto; ?>;

        }
        .gato{
            height: 300px;
            width: auto;
        }
    </style>

     <h1>
        <?= $titulo?>
    </h1>
    <P>   
        <?= $corpo?>
    </P>
    
<figure>   
    <img class="gato" src="<?= $urlImagem?>" alt="Gato">
    <figcaption>este é um raro espécime de gato</figcaption>
</figure>

<?php
echo "<a href=$urlLink target='blank'>Link do Youtube</a>"
?>
</body>
</html>