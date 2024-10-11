<?php

include_once "../config/config.php";

class Login
{
    private $conexao;

    public function __construct()
    {
        global $mysqli;
        $this->conexao = $mysqli;
    }

    public function autenticar($usuario, $senha)
    {
        $consulta = $this->conexao->prepare("SELECT * FROM usuarios WHERE usuario=? AND senha=?");
        $consulta->bind_param("ss", $usuario, md5($senha));
        $consulta->execute();

        header("Location: ./index.php");

        return $consulta->get_result()->fetch_assoc();
    }

    public static function estaLogado()
    {
        if (session_status() === PHP_SESSION_NONE) {
          session_start();
      }

      return isset($_SESSION["id_usuario"]) ? $_SESSION["id_usuario"] : false;
    }

    public static function deslogar()
    {
        session_destroy();
        header("Location: ./login.php");
    }
}