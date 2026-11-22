<!DOCTYPE html>
<html lang="pt-br">
<!-- antigo gerenciar_view.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens Enviadas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php require 'view/header.php'; ?>
    <main class="area-mensagens">
        <h1>Mensagens já enviadas</h1>
        <?php if (count($Mensagens) === 0): ?>
            <p>Nenhuma Mensagem Enviada</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($Mensagens as $Mensagem ): ?>
                    <tr class="mensagem">
                        <td><?php echo $Mensagem["nome"]; ?></td>
                        <td><?php echo $Mensagem["telefone"]; ?></td>
                        <td><?php echo $Mensagem["email"]; ?></td>
                        <td><?php echo $Mensagem["mensagem"]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </main>
    <?php require 'view/footer.php'; ?>
</body>
</html>
