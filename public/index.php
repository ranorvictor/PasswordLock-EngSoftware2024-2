<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if (!$autenticacao->estaLogado()) {
  header("Location: ./login.php");
}

$title = "Password Lock - Início";

ob_start();
?>
<div class='w-96 flex flex-col gap-4 m-auto'>
  <a href='cadastrarSenha.php' class='text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Cadastrar Senha</a>
  <a href='listarSenhas.php' class='text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Listar Senhas</a>
</div>
<?php
$content = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

include '../includes/auth_layout.php';
