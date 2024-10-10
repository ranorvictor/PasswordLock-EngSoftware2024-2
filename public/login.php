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
$titulo = "Password Lock - Login";
$tituloDoFormulario = "Login";
$botao = "Entrar";
$textoPreLink = "Novo por aqui?";
$textoDoLink = "Cadastre-se.";
$link = "./cadastrarUsuario.php";

// Conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<div class="mb-4">
    <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário:</label>
    <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
</div>
<div class="mb-6">
    <label for="senha" class="block text-sm font-medium text-gray-700">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Senha" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
</div>

<?php
$conteudo = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

// Inclui o layout base
include '../includes/formularioDeAutenticacao.php';
