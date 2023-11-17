<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $clientes["Nome"] ?></h1>
    <p class="bold">Endereço:</p>
    <p class="form-control"><?= $clientes["Endereco"] ?></p>
    <p class="bold">Telefone:</p>
    <p class="form-control"><?= $clientes["Telefone"] ?></p>
    <p class="bold">Celular:</p>
    <p class="form-control"><?= $clientes["Celular"] ?></p>
    <p class="bold">CPF:</p>
    <p class="form-control"><?= $clientes["CPF"] ?></p>
  </div>
<?php
  include_once("templates/footer.php");
?>
