<?php
include_once("./autenticacaoDeUsuario.php");

session_start();

if ($_POST) {
    $log = new Login();
    $resultado = $log->autenticar($_POST["usuario"], $_POST["senha"]);

    if ($resultado) {        
        $_SESSION["id_usuario"] = $resultado["id"];
        $_SESSION["nome"] = $resultado["nome"];
        $_SESSION["email"] = $resultado["email"];
        $_SESSION["usuario"] = $resultado["usuario"];
    } else {
        echo "Usuário e/ou senha inválidos!";
    }
}
// Título da página
$title = "Password Lock - Cadastrar Senha";

// Conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Login</h2>
<form action="" method="post" class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-md">
    <fieldset>
        <div class="mb-4">
            <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-6">
            <label for="senha" class="block text-sm font-medium text-gray-700">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </fieldset>
    <button type="submit" class="w-full bg-blue-700 text-white py-2 px-4 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Entrar
    </button>
    <a href="./cadastrarUsuario.php" class="block w-full text-center bg-gray-200 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 mt-4">
        Criar conta
    </a>
</form>
<?php
$content = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

// Inclui o layout base
include '../includes/layout.php';
