<?php
    // Protege todas as páginas exclusivas do administrador.
    session_start();
    if (!isset($_SESSION["dono_logado"]) ||
        $_SESSION["dono_logado"] !== true) {
        header("Location: login.php");
        exit;
    }
?>