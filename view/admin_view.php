<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin - Freddy Fazbear's Pizza</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php require 'view/header.php'; ?>
        <main class="area-admin">
            <h1>Oi, <i><?php echo $usuario;?></i>!</h1>
            <div class="container-botoes">
                <a href="mensagens.php"><button class="adm-actions" id="botaoCardápio">
                    <img src="assets/menu_icon.png" width="150">
                    Gerenciar cardárpio
                </button></a>
                <a href="gerenciar_catalogo.php"><button class="adm-actions" id="botaoMensagens">
                    <img src="assets/mensagens_icon.png" width="150">
                    <p>Ver mensagens</p>
                </button></a>
            </div>
        </main>
        <?php require 'view/footer.php'; ?>
    </body>
</html>