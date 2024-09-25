<?php

namespace Senha\Views;

class ListarSenhas
{
  public static function saida($senhas): string
  {
    $saida = '<div class="flex flex-row w-full justify-between mt-6 space-x-4">
                   <a href="index.php" class="text-blue-700 hover:underline"><- Inicio</a>
                   <a href="index.php?route=cadastrarSenha" class="text-blue-700 bg-blue-50 font-semibold px-4 py-2 rounded-md hover:bg-blue-100 transition">Nova Senha</a>
               </div>';

    $saida .= '
    <p class="text-lg font-semibold mb-4">Senhas Cadastradas</p>
    <table class="min-w-full border border-gray-300 text-left">
      <thead>
        <tr class="bg-gray-100">
          <th class="py-2 px-4 border-b border-gray-300">Apelido</th>
          <th class="py-2 px-4 border-b border-gray-300">Plataforma</th>
          <th class="py-2 px-4 border-b border-gray-300">Usuário</th>
          <th class="py-2 px-4 border-b border-gray-300">Senha</th>
        </tr>
      </thead>
      <tbody>
    ';

    while ($senha = $senhas->fetch_assoc()) {
      $saida .= '
      <tr class="hover:bg-gray-100">
        <td class="py-2 px-4 border-b border-gray-300">' . $senha['apelido'] . '</td>
        <td class="py-2 px-4 border-b border-gray-300">' . $senha['plataforma'] . '</td>
        <td class="py-2 px-4 border-b border-gray-300">' . $senha['usuario'] . '</td>
        <td class="py-2 px-4 border-b border-gray-300">' . $senha['senha'] . '</td>
      </tr>
      ';
    }

    $saida .= '
      </tbody>
    </table>
    ';

    return $saida;
  }
}
