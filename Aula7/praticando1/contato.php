<?php
require 'header.php'
?>

<div class="inicio">
  <div class="bg-light p-4 mb-4 rounded">
    <h1 class="text-center">Formulario para Contato</h1>
  </div>

  <form action="destino.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu nome">

    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name = "email" id="email" placeholder="Digite seu email">
    </div>

    <br>
    <div class="form-group">
      <label for="mensagem">Mensagem</label>
      <textarea class="form-control" name = "mensagem"id="mensagem" rows="3"></textarea>
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