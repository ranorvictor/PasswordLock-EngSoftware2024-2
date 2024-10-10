<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="flex flex-col min-h-screen">
    <header class="mt-4">
        <h1 class='mb-6 flex text-3xl font-bold justify-center'>
            <a href="index.php"><img src="../assets/images/Logo.png" alt="Logo Password Lock"></a>
        </h1>
    </header>

    <main class="flex-grow container mx-auto mt-4">
        <?php echo $content; ?>
    </main>

    <footer class="my-8">
        <p class="text-center">&copy; 2024 - Password Lock</p>
    </footer>

</body>

</html>