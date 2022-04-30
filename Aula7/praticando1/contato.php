<?php
require 'header.php'
?>

    <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Formulario para Contato</h1>
            </div>


            <form action="destino.php" method="GET">  
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="name" class="form-control" id="nome"  placeholder="Digite o seu nome">
   
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Digite seu email">
  </div>        
  
  <br>
  <div class="form-group">
    <label for="menssagem">Menssagem</label>
    <textarea class="form-control" id="menssagem" rows="3"></textarea>
    <br>
    <div class="form-group"> 
    <label for="data">data</label>
    <input type="date" class="form-control" id="date" placeholder="Digite seu email">
  </div>
  <br>
  <label for="hora">Hora: </label>
    <input type="time" class="form-control" id="hora" placeholder="Digite seu email">
  </div>
  <br>
  <div class="row mt-3 d-flex justify-content-around">
                <button class="btn-primary mx-4 col-md-3">Cadastrar</button>
                <button class="btn-warning col-md-3">Limpar</button>
            </div>


  </form>
  
<?php
require 'footer.php'
?>
        