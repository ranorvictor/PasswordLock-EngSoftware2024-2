<?php
include_once "config.php";

class Login {
    private $conexao;

    public function __construct() {
        global $mysqli;
        $this->conexao = $mysqli;
    }

    public function autenticar($usuario, $senha) {
        $consulta = $this->conexao->prepare("SELECT * FROM usuario WHERE usuario=? AND senha=?");
        $consulta->bind_param("ss", $usuario, md5($senha));
        $consulta->execute();
        return $consulta->get_result()->fetch_assoc();
    }

    public static function estaLogado() {
        return isset($_SESSION["id_usuario"]);
    }

    public static function deslogar() {
        session_destroy();
        header("Location: public/index.php");
    }
}

session_start();

if ($_POST) {
    $log = new Login();
    $resultado = $log->autenticar($_POST["usuario"], $_POST["senha"]);

    if ($resultado) {
        $_SESSION["id_usuario"] = $resultado["id_usuario"];
        $_SESSION["nome"] = $resultado["nome"];
        $_SESSION["e_mail"] = $resultado["e_mail"];
        $_SESSION["usuario"] = $resultado["usuario"];
        $_SESSION["data_nascimento"] = $resultado["data_nascimento"];
        echo "<script>location.href='public/index.php';</script>";
    } else {
        echo "Usuário e/ou senha inválidos!";
    }
}
?>
<div name="loginblock">
    <form action="" method="post">
        <fieldset>
            <h1>Login</h1>
            <label for="usuario">Usuário:
                <input type="text" name="usuario" placeholder="Usuário"><br>
            </label>
            <label for="senha">Senha:
                <input type="password" name="senha" placeholder="Senha"><br>
            </label>
        </fieldset>
        <button type="submit">Entrar</button>
    </form>
</div>
