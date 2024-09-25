<?php

namespace Model;

class Senha {
  public static function novaSenha($id, $apelido, $plataforma, $usuario, $senha) {
    global $mysqli;
    $sql = "INSERT INTO senhas (id, apelido, plataforma, usuario, senha) VALUES ('$id', '$apelido', '$plataforma', '$usuario', '$senha')";
    $result = $mysqli->query($sql);
    return $result;
  }
}