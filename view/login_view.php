<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Freddy Fazbear's Pizza</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php require 'view/header.php'; ?>
        <main class="area-login">
            <h2>Login do Administrador</h2> <br>
            <form action="login.php" method="post">
                <label>Usuário:</label><br>
                <input type="text" name="usuario" required size="20"><br><br>
                <label>Senha:</label><br>
                <input type="password" name="senha" required size="20"><br><br>
                <button type="submit">Entrar</button>
            </form>
            <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
        </main>
        <?php require 'view/footer.php'; ?>
    </body>
</html>