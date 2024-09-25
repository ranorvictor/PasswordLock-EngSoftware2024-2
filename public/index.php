<?php

require "../Model/Senha.php";

$route = $_GET['route'] ?? '';

if ($route == '') {
  echo "<br>Bem-vindo ao sistema de senhas!";
} else if ($route == 'novaSenha') {
  echo "<br>Editar senha";
} else if ($route == 'apagarSenha') {
  echo "<br>Deletar senha";
} else if ($route == 'listarSenhas') {
  echo "<br>Listar senhas";
} else if ($route == 'pesquisarSenha') {
  echo "<br>Listar senhas";
} else if ($route == 'editarSenha') {
  echo "<br>Editar senha";
} else {
  http_response_code(404);
  echo 'Page not found (Invalid route)';
}

echo $view->output($model);
