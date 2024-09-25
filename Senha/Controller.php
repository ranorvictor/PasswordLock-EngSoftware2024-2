<?php

namespace Senha;

require "Views/Cadastro.php";

class Controller
{
  public static function novaSenha(): void
  {
    try {
      $apelido = $_POST['apelido'];
      $plataforma = $_POST['plataforma'];
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      \Model\Senha::novaSenha($apelido, $plataforma, $usuario, $senha);
      echo "Senha cadastrada com sucesso!";

      header("Location: index.php");
      die();
    } catch (\Exception $erro) {
      echo "Erro ao cadastrar senha. " . $erro->getMessage();
    }
  }

  public static function cadastrarSenha(): Views\Cadastro
  {
    return new Views\Cadastro();
  }
}
