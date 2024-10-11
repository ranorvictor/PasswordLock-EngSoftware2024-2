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

$titulo = "Password Lock - Login";
$tituloDoFormulario = "Login";
$botao = "Entrar";
$textoPreLink = "Novo por aqui?";
$textoDoLink = "Cadastre-se.";
$link = "./cadastrarUsuario.php";

ob_start();
?>

<input type="text" name="usuario" id="usuario" placeholder="Usuário" required class="input-autenticacao">
<input type="password" name="senha" id="senha" placeholder="Senha" required class="input-autenticacao">

<?php
$conteudo = ob_get_clean(); // Armazena o conteúdo do buffer na variável $content

include '../includes/formularioDeAutenticacao.php';
