<?php
require 'header.php'
?>

    <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Destino</h1>
<?php
$data = date("d/m/Y H:i:s");
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

?>  
<?php
echo "nome informado: ". $nome . "<br>";
echo "Email: " . $email . "</br>";
echo "Mensagem" . $mensagem . "</br>";
echo "data e hora: " . $data . "</br>"
?>
<br>
<input class="btn btn-primary" type="button" value="Voltar" onclick="history.go(-1)">
<?php


?>
<?php 

$arquivo = $nome . '.txt';
$fp = fopen($arquivo,"a+");
fwrite($fp, "Nome informado:" . $nome . "\r\n" . "EMail: " . $email . "\r\n" .  "Mensagem: " . $mensagem . 
"\r\n" . "Data e Hora: " . $data
);
?>
<?php
require 'footer.php'
?>
        