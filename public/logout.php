<?php
include_once("./autenticacaoDeUsuario.php");

$log = new Login();

if (Login::estaLogado()) {
  Login::deslogar();
} else {
  header("Location: ./login.php");
}
?>