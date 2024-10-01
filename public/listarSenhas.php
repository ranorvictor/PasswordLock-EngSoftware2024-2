<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Lock</title>
</head>

<body>
  <main class='container mx-auto flex flex-col mt-4'>
    <h1 class='mb-6 flex text-3xl font-bold justify-center'>
      <img src="../assets/images/Logo.png" alt="Logo Password Lock">
    </h1>

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

  </main>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>