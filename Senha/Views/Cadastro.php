<?php

namespace Senha\Views;

class Cadastro
{
  public function saida(): string
  {
    $saida = '
		<p>Cadastrar uma nova Senha</p>
		<form action="index.php?route=novaSenha" method="POST">
        <label for="apelido">Apelido:</label>
        <input type="text" id="apelido" name="apelido" required><br><br>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma" required><br><br>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha" required><br><br>

        <button type="submit">Enviar</button>
    </form>
    ';
    return $saida;
  }
}

?>