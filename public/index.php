<?php

require "../Model/Senha.php";
require "../Senha/Controller.php";

$route = $_GET['route'] ?? '';

if ($route == '') {
  echo "Bem vindo ao sistema de senhas!";
} else if ($route == 'cadastrarSenha') {
  echo \Senha\Controller::cadastrarSenha()->saida();
} else if ($route == 'novaSenha') {
  echo \Senha\Controller::novaSenha();
} else if ($route == 'apagarSenha') {
  echo "<br>Deletar senha";
} else if ($route == 'listarSenhas') {
  echo "<br>Listar senhas";
} else if ($route == 'pesquisarSenha') {
  echo "<br>Pesquisar senha";
} else if ($route == 'editarSenha') {
  echo "<br>Editar senha";
} else {
  http_response_code(404);
  echo 'Página não encontrada! Error 404 (Not Found)';
}
