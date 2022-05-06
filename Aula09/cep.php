<?php


use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';



?>
<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .img-lorem{
            width: 30%;
        }
        .inicio p{
            text-align: justify;
            text-indent: 3.5em;
        }
    </style>
</head>

<body>

   

    <div class="container">
    <div class="inicio">
  <div class="bg-light p-4 mb-4 rounded">
    <h1 class="text-center">CEP </h1>
  </div>

  <form action=""   method="POST">
    <div class="form-group">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP">
      

    </div>
    <?PHP
    $CEP = $_POST["cep"];

    $address = CepPromise::fetch($CEP);
echo "<h1>" . "CEP: " . $address->zipCode . "<br>" . "</h1>" ;
echo $address->street . "<br>";
echo $address->district . "<br>";
echo "Cidade: " . $address->city . "<br>";
echo "Estado: ".  $address->state;
        ?>
    

    <br>
    <div class="row mt-3 d-flex justify-content-around">
      <button class="btn-primary mx-4 col-md-3">enviar</button>
      <button class="btn-warning col-md-3">Limpar</button>
    </div>

    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>