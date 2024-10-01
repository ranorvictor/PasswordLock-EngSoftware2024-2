<?php

require "../config/config.php";

class Senha {
  public static function selecionaTudo() {
    global $mysqli;
    $sql = "SELECT * FROM senhas";
    $result = $mysqli->query($sql);
    return $result;
  }

  public static function novaSenha($apelido, $plataforma, $usuario, $senha) {
    global $mysqli;
    $sql = "INSERT INTO senhas (apelido, plataforma, usuario, senha) VALUES ('$apelido', '$plataforma', '$usuario', '$senha')";
    $result = $mysqli->query($sql);
    return $result;
  }
}

?>