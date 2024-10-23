<?php
include_once("./autenticacaoDeUsuario.php");

$autenticacao = new Login;

if (!$autenticacao->estaLogado()) {
  header("Location: login.php");
}

$titulo = "Password Lock - Minhas Senhas";

ob_start();
?>
<form action="processaFormIndex.php" method="POST" class="flex flex-col gap-[36px] bg-primary-source px-[36px] py-[18px] rounded-[18px]">
  <div class="flex justify-between items-center gap-[54px]">
    <h1 class="flex-none text-desktop-h1 text-neutral-white font-montserrat font-bold">Minhas Senhas</h1>
    <div class="grow flex flex-row gap-[18px] items-center">
      <span class="sem-selecao flex flex-row gap-[10px] border-2 px-[10px] h-[40px] border-primary-300 rounded-[5px] grow">
        <input type="text" name="pesquisa" placeholder="Pesquisar por..." class="grow bg-primary-source text-neutral-white text-desktop-body-secondary placeholder:text-primary-100 placeholder:text-desktop-body-secondary focus:outline-none focus:ring-0 focus:border-transparent">
        <button type="submit" name="acao" value="pesquisar">
          <img src="../assets/images/Search icon.svg" alt="Ícone de lupa">
        </button>
      </span>
      <a href="cadastrarSenha.php" class="sem-selecao flex flex-row items-center gap-[5px] bg-secondary-source h-[40px] px-[10px] rounded-[5px] text-secondary-700 font-semibold text-desktop-cta">
        <img src="../assets/images/Add SVG.svg" alt="Ícone de adição.">
        <p>Nova Senha</p>
      </a>

      
      <button type="submit" name="acao" value="compartilhar" class="hidden ml-auto com-selecao flex-row items-center gap-[5px] bg-primary-100 h-[40px] px-[10px] rounded-[5px] text-primary-700 font-semibold text-desktop-cta">
        <img src="../assets/images/Share icon.svg" alt="Ícone de compratilhamento.">
        <p>Compartilhar</p>
      </button>
      <button type="submit" name="acao" value="excluir" class="hidden com-selecao flex-row items-center gap-[5px] bg-[#f2dada] h-[40px] px-[10px] rounded-[5px] text-[#E22222] font-semibold text-desktop-cta">
        <img src="../assets/images/Trash Icon.svg" alt="Ícone de lixeira.">
        <p>Excluir</p>
      </button>
    </div>
  </div>

  <table class="min-w-full text-left text-neutral-white">
    <thead class="font-semibold text-desktop-cta mb-9">
      <tr class="grid grid-cols-10">
        <th class="ml-2"><input type="checkbox" onclick="selecionaTodos(this)" onchange="verificarSelecao()" /></th>
        <th class="col-span-3">Plataforma</th>
        <th class="col-span-2">Apelido</th>
        <th class="col-span-2">Usuário</th>
        <th class="col-span-2">Senha</th>
      </tr>
    </thead>
    <tbody class="font-light text-desktop-body-secondary">
      <?php
      require "../config/config.php";

      try {
        global $mysqli;
        $sql = "SELECT * FROM senhas WHERE id IN (SELECT id_senha FROM usuarios_senhas WHERE id_usuario = {$_SESSION['id_usuario']})";
        $senhas = $mysqli->query($sql);
      } catch (\Exception $erro) {
        echo "Erro ao listar senhas. " . $erro->getMessage();
      }

      while ($senha = $senhas->fetch_assoc()) {
        echo '<tr class="hover:bg-primary-600 rounded grid grid-cols-10">';
        echo '<td class="ml-2"><input type="checkbox" name="ids[]" value="' . $senha["id"] . '" onchange="verificarSelecao()"></td>';
        echo '<td class="col-span-3">' . $senha['plataforma'] . '</td>';
        echo '<td class="col-span-2">' . $senha['apelido'] . '</td>';
        echo '<td class="col-span-2">' . $senha['usuario'] . '</td>';
        echo '<td class="col-span-2">' . $senha['senha'] . '</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</form>

<script>
  function verificarSelecao() {
    const checkboxes = document.querySelectorAll('input[name="ids[]"]:checked');
    const semSelecao = document.getElementsByClassName('sem-selecao');
    const comSelecao = document.getElementsByClassName('com-selecao');

    if (checkboxes.length > 0) {
      for (let i = 0; i < semSelecao.length; i++) {
        semSelecao[i].style.display = 'none';
      }

      for (let i = 0; i < comSelecao.length; i++) {
        comSelecao[i].style.display = 'flex';
      }
    } else {
      for (let i = 0; i < semSelecao.length; i++) {
        semSelecao[i].style.display = 'flex';
      }

      for (let i = 0; i < comSelecao.length; i++) {
        comSelecao[i].style.display = 'none';
      }
    }
  }

  function selecionaTodos(source) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => checkbox.checked = source.checked);
  }
</script>
<?php
$conteudo = ob_get_clean();

include '../includes/layoutAutenticado.php';
