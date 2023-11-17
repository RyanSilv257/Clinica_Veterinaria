<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar cliente</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="Nome">Nome:</label>
        <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="Endereco">Endereço:</label>
        <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Digite o Endereço" required>
      </div>
      <div class="form-group">
        <label for="Telefone">Telefone:</label>
        <input type="text" class="form-control" id="Telefone" name="Telefone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="Celular">Celular:</label>
        <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Digite o celular" required>
      </div>
      <div class="form-group">
        <label for="CPF">CPF:</label>
        <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Digite o CPF" required>
      </div>
      <button t ype="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
