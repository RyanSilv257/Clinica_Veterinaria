<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Cliente</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="CodCliente" value="<?= $clientes['CodCliente'] ?>">
      <div class="form-group">
        <label for="Nome">Nome do Cliente:</label>
        <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Digite o nome" value="<?= $clientes['Nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="Endereco">Endereço do Cliente:</label>
        <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Digite o endereço" value="<?= $clientes['Endereco'] ?>" required>
      </div>
      <div class="form-group">
        <label for="Telefone">Telefone do Cliente:</label>
        <input type="text" class="form-control" id="Telefone" name="Telefone" placeholder="Digite o telefone" value="<?= $clientes['Telefone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="Celular">Celular do Cliente:</label>
        <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Digite o telefone" value="<?= $clientes['Celular'] ?>" required>
      </div>
      <div class="form-group">
        <label for="CPF">CPF do Cliente:</label>
        <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Digite o CPF" value="<?= $clientes['CPF'] ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
