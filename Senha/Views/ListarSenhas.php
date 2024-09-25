<?php

namespace Senha\Views;

class ListarSenhas
{
  public static function saida($senhas): string
  {
    $saida = '
    <p>Senhas Cadastradas</p>
    <table border="1">
      <tr>
        <th>Apelido</th>
        <th>Plataforma</th>
        <th>Usuario</th>
        <th>Senha</th>
      </tr>
    ';
    while ($senha = $senhas->fetch_assoc()) {
      $saida .= '
      <tr>
        <td>' . $senha['apelido'] . '</td>
        <td>' . $senha['plataforma'] . '</td>
        <td>' . $senha['usuario'] . '</td>
        <td>' . $senha['senha'] . '</td>
      </tr>
      ';
    }
    $saida .= '</table>';
    return $saida;
  }
}
?>