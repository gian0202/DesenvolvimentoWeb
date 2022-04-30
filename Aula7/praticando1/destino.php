<?php
require 'header.php'
?>

    <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Formulario para Contato</h1>
            </div>

            <form>
            <?php
    
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $menssagem = filter_input(INPUT_GET, "menssagem", FILTER_SANITIZE_SPECIAL_CHARS);
    $data = filter_input(INPUT_GET, "data", FILTER_SANITIZE_SPECIAL_CHARS);
    $hora = filter_input(INPUT_GET, "hora", FILTER_SANITIZE_SPECIAL_CHARS);
    
    ?>
    <?php
    echo "Nome informado: " .$nome . "<br>";
    echo "Email informado: " .$email . "<br>";
    echo "Menssagem: " . $menssagem . "<br>";
    echo "data: " . $data . "<br>";
    echo "Hora: " . $hora . "<br>";
?>

</form>
       </div>
<?php
require 'footer.php'
?>
        