<?php

namespace Senha;

class Controller
{
  public static function novaSenha(): void
  {
    try {
      $id = $_POST['id'];
      $apelido = $_POST['apelido'];
      $plataforma = $_POST['plataforma'];
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      \Model\Senha::novaSenha($id, $apelido, $plataforma, $usuario, $senha);
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
