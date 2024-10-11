<?php

require "../config/config.php";
require "./autenticacaoDeUsuario.php";

try {
  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);

  global $mysqli;
  $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$usuario', '$email', '$senha', NOW(), NOW())";
  $criarUsuario = $mysqli->query($sql);

  if (!$criarUsuario) {
    throw new \Exception("Erro ao cadastrar usuário.");
  } else {
    session_start();
    $log = new Login();
    $resultado = $log->autenticar($_POST["usuario"], $_POST["senha"]);

    if ($resultado) {
      $_SESSION["id_usuario"] = $resultado["id"];
      $_SESSION["nome"] = $resultado["nome"];
      $_SESSION["email"] = $resultado["email"];
      $_SESSION["usuario"] = $resultado["usuario"];
    } else {
      echo "Usuário e/ou senha inválidos!";
    }
  }

  echo "Usuário cadastrado com sucesso!";

  header("Location: ./index.php");
  die();
} catch (\Exception $erro) {
  echo "Erro ao cadastrar usuário. " . $erro->getMessage();
}
