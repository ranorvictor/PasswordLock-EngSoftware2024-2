<?php

require "../Model/Senha.php";
require "../Senha/Controller.php";

$route = $_GET['route'] ?? '';

if ($route == '') {
  echo "Bem-vindo ao sistema de senhas!";
  echo "<br><a href='index.php?route=cadastrarSenha'>Cadastrar Senha</a>";
  echo "<br><a href='index.php?route=listarSenhas'>Ver Senhas</a>";
} else if ($route == 'novaSenha') {
  \Senha\Controller::novaSenha();
} else if ($route == 'cadastrarSenha') {
  echo \Senha\Controller::cadastrarSenha()->saida();
} else if ($route == 'apagarSenha') {
  echo "<br>Deletar senha";
} else if ($route == 'listarSenhas') {
  list($view, $senhas) = \Senha\Controller::listarSenhas();
  echo $view->saida($senhas);
} else if ($route == 'pesquisarSenha') {
  echo "<br>Listar senhas";
} else if ($route == 'editarSenha') {
  echo "<br>Editar senha";
} else {
  http_response_code(404);
  echo 'Página não encontrada! Error 404 (Not Found)';
}