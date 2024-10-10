<?php
// Título da página
$titulo = "Password Lock - Cadastrar Senha";

// Conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Cadastro de Usuário</h2>
<form action="novoUsuario.php" method="POST" class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-md">
  <div class="mb-4">
    <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
    <input type="text" id="nome" name="nome" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Seu nome">
  </div>
  <div class="mb-4">
    <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nome de usuário">
  </div>
  <div class="mb-4">
    <label for="senha" class="block text-sm font-medium text-gray-700">Senha:</label>
    <input type="password" id="senha" name="senha" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Sua senha">
  </div>
  <div class="mb-6">
    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
    <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Seu email">
  </div>
  <button type="submit" class="w-full bg-blue-700 text-white py-2 px-4 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    Cadastrar
  </button>
  <a href="./login.php" class="block w-full text-center bg-gray-200 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 mt-4">
    Fazer login
  </a>
</form>
<?php
$content = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

// Inclui o layout base
include '../includes/formularioDeAutenticacao.php';
