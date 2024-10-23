<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if (!$autenticacao->estaLogado()) {
  header("Location: login.php");
}

require "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ids'])) {
  $ids = $_POST['ids'];
  $acao = $_POST['acao'];

  global $mysqli;

  if ($acao === 'excluir') {
    $ids_string = implode(',', array_map('intval', $ids));
    $query = "DELETE FROM usuarios_senhas WHERE id_senha IN ($ids_string)";
    if ($mysqli->query($query)) {
      header("Location: index.php");
    } else {
      echo "Erro ao excluir os registros: " . $conexao->error;
    }
  } elseif ($acao === 'compartilhar') {
    header("Location: compartilhar.php?senhas=" . implode(',', $ids));
  }
} else {
  $pesquisa = $_POST['pesquisa'];
  header("Location: index.php?pesquisa=$pesquisa");
}
