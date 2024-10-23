<?php
$title = "Password Lock - Compartilhar Senha";

ob_start();

require "../config/config.php";

if (isset($_GET['senhas'])) {
    $ids_senhas = explode(',', $_GET['senhas']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['usuario'])) {
        try {
            global $mysqli;

            $usuario = $_POST['usuario'];

            $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE usuario = ?");
            $stmt->bind_param('s', $usuario); 
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $id_usuario = $row['id'];

                foreach ($ids_senhas as $id_senha) {
                    if (is_numeric($id_senha)) {
                        $stmt = $mysqli->prepare("INSERT INTO usuarios_senhas (id_usuario, id_senha) VALUES (?, ?)");
                        $stmt->bind_param('ii', $id_usuario, $id_senha);
                        $stmt->execute();
                    }
                }

                echo "Senhas compartilhadas com sucesso!";
                header("Location: ./index.php");
                die();
            } else {
                echo "Usuário não encontrado.";
            }
        } catch (\Exception $erro) {
            echo "Erro ao compartilhar senhas: " . $erro->getMessage();
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Por favor, preencha o nome do usuário.";
    }
} else {
    echo "IDs de senhas não foram fornecidos.";
}
?>

<form method="POST">
    <input type="text" name="usuario" placeholder="Digite o nome do usuário" required>
    <button type="submit">Compartilhar</button>
</form>
