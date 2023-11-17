<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Clientes</h1>
    <?php if(count($Cliente) > 0): ?>
      <table class="table" id="cliente-table">
        <thead>
          <tr>
            <th scope="col">Código do Cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">CPF</th>


          </tr>
        </thead>
        <tbody>
          <?php foreach($Cliente as $clientes): ?>
            <tr>
              <td scope="row" class="col-id"><?= $clientes["CodCliente"] ?></td>
              <td scope="row"><?= $clientes["Nome"] ?></td>
              <td scope="row"><?= $clientes["Endereco"] ?></td>
              <td scope="row"><?= $clientes["Telefone"] ?></td>
              <td scope="row"><?= $clientes["Celular"] ?></td>
              <td scope="row"><?= $clientes["CPF"] ?></td>




              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $clientes["CodCliente"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $clientes["CodCliente"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $clientes["CodCliente"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
