<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="flex flex-col min-h-screen bg-neutral-white">
    <header class="default-x-spacing flex flex-row justify-between my-[54px]">
        <div class="overlay w-full h-full absolute hidden left-0 top-0 z-1"></div>
        <h1 class='text-3xl font-bold'>
            <a href="index.php"><img src="../assets/images/Logo.png" alt="Logo Password Lock"></a>
        </h1>
        <div class="relative max-w-md w-full">
            <button class="flex flex-row gap-[5px] items-center hover:cursor-pointer ml-auto" onclick="mostrarModal()">
                <img src="../assets/images/User SVG.svg" alt="Ícone de usuário" class="h-[40px]">
                <p class="text-desktop-body-secondary"><?php echo ucwords($_SESSION["nome"]); ?></p>
                <img src="../assets/images/Arrow.svg" alt="Seta que indica se o modal do usuário está aberto ou não" class="arrow h-[10px]">
            </button>
            <div class="modal-usuario hidden absolute right-0 border-[1px] border-neutral-gray p-[18px] rounded-[10px] shadow-[0px] flex flex-col gap-[9px] z-2">
                <a href="./editarUsuario.php" class="text-desktop-body-secondary border-b-[1px] border-neutral-gray pb-[9px] rounded">Editar Perfil</a>
                <a href="./logout.php" class="text-desktop-body-secondary">Sair</a>
            </div>
    </header>

    <main class="mt-[36px] mb-[72px] default-x-spacing flex-grow container">
        <?php echo $conteudo; ?>
    </main>

    <footer class="py-[18px] flex flex-col gap-[18px] bg-neutral-black">
        <img src="../assets/images/Logo.svg" alt="Logo Password Lock" class="h-[30px]">
        <img src="../assets/images/Social Networks.svg" alt="Redes sociais da Password Lock" class="h-[30px]">
        <p class="text-neutral-white text-center font-thin text-[13px]">&copy; 2024 - Password Lock</p>
    </footer>
    <script>
        function mostrarModal() {
            const modal = document.querySelector('.modal-usuario');
            const arrow = document.querySelector('.arrow');
            const overlay = document.querySelector('.overlay');

            modal.classList.toggle('hidden');
            arrow.classList.toggle('rotate-90');
            overlay.classList.toggle('hidden');

            overlay.addEventListener('click', () => {
                modal.classList.add('hidden');
                overlay.classList.add('hidden');
                arrow.classList.remove('rotate-90');
            });
        }
    </script>
</body>

</html>