<?php
$titulo = "Password Lock - Cadastrar Usuário";
$action = 'action="./novoUsuario.php"';
$tituloDoFormulario = "Cadastro";
$botao = "Cadastrar";
$textoPreLink = "Já possui uma conta?";
$textoDoLink = "Entre.";
$link = "./login.php";

ob_start();
?>
<input type="text" id="nome" name="nome" required class="input-autenticacao" placeholder="Seu nome">
<input type="text" id="usuario" name="usuario" required class="input-autenticacao" placeholder="Usuário">
<input type="password" id="senha" name="senha" required class="input-autenticacao" placeholder="Sua senha">
<input type="email" id="email" name="email" required class="input-autenticacao" placeholder="Seu email">
<?php
$conteudo = ob_get_clean();

include '../includes/formularioDeAutenticacao.php';
