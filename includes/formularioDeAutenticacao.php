<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="min-h-screen bg-cover bg-center flex flex-col" style="background-image: url('../assets/images/Background.jpg');">
    <header class="mt-4">
        <img src="../assets/images/Logo.png" alt="Logo Password Lock" class="mx-auto mt-6">
    </header>

    <main class="font-poppins text-neutral-white flex-grow container mx-auto mt-4">
        <div class="flex flex-row max-w-[700px] h-full mx-auto mt-12">
            <img src="../assets/images/hero.png" alt="Um escudo com um cadeado no centro" class="h-auto w-1/2 object-cover rounded-tl-lg rounded-bl-lg">
            <div class="flex-1 bg-primary-source rounded-tr-lg rounded-br-lg p-[24px]">
                <h1 class="font-montserrat text-desktop-h1 font-bold mb-[24px]"><?php echo $tituloDoFormulario; ?></h1>
                <form action="" method="post" class="flex flex-col gap-[12px]">
                    <fieldset>
                        <?php echo $conteudo; ?>
                    </fieldset>
                    <button type="submit" class="w-full py-[8px] text-desktop-cta font-semibold bg-secondary-source text-secondary-700 rounded-md hover:brightness-125 filter transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2">
                        <?php echo $botao; ?>
                    </button>
                    <span class="flex flex-row justify-center gap-1">
                        <?php echo $textoPreLink; ?><a href=<?php echo $link; ?> class="text-secondary-source underline"><?php echo $textoDoLink; ?></a>
                    </span>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-8">
        <p class="text-center">&copy; 2024 - Password Lock</p>
    </footer>

</body>

</html>