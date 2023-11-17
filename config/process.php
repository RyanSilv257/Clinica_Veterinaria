<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $Nome = $data["Nome"];
      $Endereco = $data["Endereco"];
      $Telefone = $data["Telefone"];

      $query = "INSERT INTO cliente (Nome, Endereco, Telefone) VALUES (:Nome, :Endereco, :Telefone)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":Nome", $Nome);
      $stmt->bindParam(":Endereco", $Endereco);
      $stmt->bindParam(":Telefone", $Telefone);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $Nome = $data["Nome"];
      $Endereco = $data["Endereco"];
      $Telefone = $data["Telefone"];
      $CodCliente = $data["CodCliente"];

      $query = "UPDATE Cliente 
                SET Nome = :Nome, Endereco = :Endereco, Telefone = :Telefone 
                WHERE CodCliente = :CodCliente";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":Nome", $Nome);
      $stmt->bindParam(":Endereco", $Endereco);
      $stmt->bindParam(":Telefone", $Telefone);
      $stmt->bindParam(":CodCliente", $CodCliente);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $CodCliente = $data["CodCliente"];

      $query = "DELETE FROM Cliente WHERE CodCliente = :CodCliente";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":CodCliente", $CodCliente);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Cliente removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $CodCliente;

    if(!empty($_GET)) {
      $CodCliente = $_GET["CodCliente"];
    }

    // Retorna o dado de um contato
    if(!empty($CodCliente)) {

      $query = "SELECT * FROM Cliente WHERE CodCliente = :CodCliente";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":CodCliente", $CodCliente);

      $stmt->execute();

      $clientes = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $Cliente = [];

      $query = "SELECT * FROM Cliente";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $Cliente = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;