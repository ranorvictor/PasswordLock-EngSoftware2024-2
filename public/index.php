<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Lock</title>
</head>

<body>
  <script src="https://cdn.tailwindcss.com"></script>
  <main class='container mx-auto flex flex-col mt-4'>
    <h1 class='mb-6 flex text-3xl font-bold justify-center'>
      <img src="./img/Logo.png" alt="Logo Password Lock">
    </h1>
    <?php

    require "../Model/Senha.php";
    require "../Senha/Controller.php";

    $route = $_GET['route'] ?? '';

    if ($route == '') {
      echo "<div class='w-96 flex flex-col gap-4 m-auto'><a href='index.php?route=cadastrarSenha' class='font-semibold text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Nova Senha</a>";
      echo "<a href='index.php?route=listarSenhas' class='font-semibold text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Ver Senhas</a></div>";
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

    ?>
  </main>
</body>

</html>