<?php
// Título da página
$title = "Password Lock - Cadastrar Senha";

// Conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<h2 class="text-2xl font-bold text-center text-gray-700">Cadastro de Usuário</h2>
<form action="novoUsuario.php" method="POST" class="max-w-md mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
  <div class="mb-4">
    <label for="nome" class="block text-gray-700">Nome</label>
    <input type="text" id="nome" name="nome" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Seu nome">
  </div>
  <div class="mb-4">
    <label for="usuario" class="block text-gray-700">Usuário</label>
    <input type="text" id="usuario" name="usuario" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Nome de usuário">
  </div>
  <div class="mb-4">
    <label for="senha" class="block text-gray-700">Senha</label>
    <input type="password" id="senha" name="senha" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Sua senha">
  </div>
  <div class="mb-4">
    <label for="email" class="block text-gray-700">Email</label>
    <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Seu email">
  </div>
  <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
    Cadastrar
  </button>
</form>
<?php
$content = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

// Inclui o layout base
include '../includes/layout.php';
