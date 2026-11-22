<?php
    session_start();
    $erro = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"] ?? "";
        $senha = $_POST["senha"] ?? "";

    // Dados de acesso do administrador da Freddy Fazbear's Pizza.
        $usuarioCorreto = "dono";
        $senhaCorreta = "Freddy2026!";
        if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
            session_regenerate_id(true);
            $_SESSION["dono_logado"] = true;
            $_SESSION["usuario"] = $usuario;
            header("Location: mensagens.php");
            exit;
        } else {
            $erro = "Usuário ou senha incorretos!";
        }
    }
    require "view/login_view.php";
?>
