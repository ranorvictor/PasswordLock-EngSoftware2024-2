<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if(!$autenticacao->estaLogado()){
  header("Location: login.php");
}

require "../config/config.php";

try {
  $apelido = $_POST['apelido'];
  $plataforma = $_POST['plataforma'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  global $mysqli;
  $sql = "INSERT INTO senhas (apelido, plataforma, usuario, senha) VALUES ('$apelido', '$plataforma', '$usuario', '$senha')";
  $result = $mysqli->query($sql);
  
  echo "Senha cadastrada com sucesso!";
  
  header("Location: ./listarSenhas.php");
  die();
} catch (\Exception $erro) {
  echo "Erro ao cadastrar senha. " . $erro->getMessage();
}
