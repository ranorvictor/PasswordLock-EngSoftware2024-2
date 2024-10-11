<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if(!$autenticacao->estaLogado()){
  header("Location: login.php");
}

$title = "Password Lock - Cadastrar Senha";

ob_start();
?>
<div class="flex flex-row w-full justify-between mt-6 space-x-4">
  <a href="index.php" class="text-blue-700 hover:underline"><- Inicio</a>
      <a href="listarSenhas.php" class="text-blue-700 bg-blue-50 font-semibold px-4 py-2 rounded-md hover:bg-blue-100 transition">Ver Senhas</a>
</div>

<p class="text-lg font-semibold mb-4">Cadastrar uma nova Senha</p>
<form action="novaSenha.php" method="POST" class="space-y-4">
  <div class="flex flex-col">
    <label for="apelido" class="text-sm font-medium">Apelido:</label>
    <input type="text" id="apelido" name="apelido" required class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div class="flex flex-col">
    <label for="plataforma" class="text-sm font-medium">Plataforma:</label>
    <input type="text" id="plataforma" name="plataforma" required class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div class="flex flex-col">
    <label for="usuario" class="text-sm font-medium">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div class="flex flex-col">
    <label for="senha" class="text-sm font-medium">Senha:</label>
    <input type="text" id="senha" name="senha" required class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>
  <button type="submit" class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 transition">Enviar</button>
</form>
<?php
$content = ob_get_clean();

include '../includes/layout.php';
