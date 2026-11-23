<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Freddy Fazbear's Pizza</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php require 'view/header.php'; ?>
        <main class="area-login">
            <h2>Login do Administrador</h2>
            <form action="login.php" method="post">
                <label>usuário:</label><br>
                <input type="text" name="usuario" required size="20"><br><br>
                <label>senha:</label><br>
                <input type="password" name="senha" required size="20"><br>
                <button type="submit">Entrar</button>
            </form>
            <?php if($erro != ''): ?>
                <p class="erro"><?php echo $erro?></p>
            <?php endif?>
        </main>
        <?php require 'view/footer.php'; ?>
    </body>
</html>