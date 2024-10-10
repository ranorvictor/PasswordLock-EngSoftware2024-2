<?php

require "../config/config.php";

try {
  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);

  global $mysqli;
  $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$usuario', '$email', '$senha', NOW(), NOW())";
  $result = $mysqli->query($sql);
  
  echo "Usuário cadastrado com sucesso!";
  
  header("Location: ./index.php");
  die();
} catch (\Exception $erro) {
  echo "Erro ao cadastrar usuário. " . $erro->getMessage();
}
