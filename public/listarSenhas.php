<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if(!$autenticacao->estaLogado()){
  header("Location: login.php");
}

// Título da página
$title = "Password Lock - Listar Senhas";

// Conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<div class="flex flex-row w-full justify-between mt-6 space-x-4">
  <a href="index.php" class="text-blue-700 hover:underline"><- Inicio</a>
      <a href="cadastrarSenha.php" class="text-blue-700 bg-blue-50 font-semibold px-4 py-2 rounded-md hover:bg-blue-100 transition">Nova Senha</a>
</div>

<p class="text-lg font-semibold mb-4">Senhas Cadastradas</p>
<table class="min-w-full border border-gray-300 text-left">
  <thead>
    <tr class="bg-gray-100">
      <th class="py-2 px-4 border-b border-gray-300">Apelido</th>
      <th class="py-2 px-4 border-b border-gray-300">Plataforma</th>
      <th class="py-2 px-4 border-b border-gray-300">Usuário</th>
      <th class="py-2 px-4 border-b border-gray-300">Senha</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require "../config/config.php";

    try {
      global $mysqli;
      $sql = "SELECT * FROM senhas";
      $senhas = $mysqli->query($sql);
    } catch (\Exception $erro) {
      echo "Erro ao listar senhas. " . $erro->getMessage();
    }

    while ($senha = $senhas->fetch_assoc()) {
      echo '<tr class="hover:bg-gray-100">';
      echo '<td class="py-2 px-4 border-b border-gray-300">' . $senha['apelido'] . '</td>';
      echo '<td class="py-2 px-4 border-b border-gray-300">' . $senha['plataforma'] . '</td>';
      echo '<td class="py-2 px-4 border-b border-gray-300">' . $senha['usuario'] . '</td>';
      echo '<td class="py-2 px-4 border-b border-gray-300">' . $senha['senha'] . '</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<?php
$content = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

// Inclui o layout base
include '../includes/layout.php';
