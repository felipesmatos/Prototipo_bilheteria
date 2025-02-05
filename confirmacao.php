<?php
// Gera um código único para o ingresso
$codigoIngresso = strtoupper(substr(md5(uniqid()), 0, 8));

// Obtém os parâmetros da URL
$jogo = $_GET['jogo'] ?? 'Não informado';
$dataJogo = $_GET['dataJogo'] ?? 'Não informado';
$local = $_GET['localJogo'] ?? 'Não informado';
$precoTotal = $_GET['precoTotal'] ?? '0.00';
$nome = $_GET['nome'] ?? 'Não informado';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Compra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="box has-text-centered">
                <h1 class="title has-text-success">Compra Confirmada!</h1>
                <p class="subtitle">Seu ingresso foi gerado com sucesso.</p>
                <hr>
                <h2 class="title is-4">Detalhes do Ingresso</h2>
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
                <p><strong>Jogo:</strong> <?php echo htmlspecialchars($jogo); ?></p>
                <p><strong>Data:</strong> <?php echo htmlspecialchars($dataJogo); ?></p>
                <p><strong>Local:</strong> <?php echo htmlspecialchars($local); ?></p>
                <p><strong>Total Pago:</strong> R$ <?php echo htmlspecialchars($precoTotal); ?></p>
                <p><strong>Código do Ingresso:</strong> <span class="tag is-info is-medium"><?php echo $codigoIngresso; ?></span></p>
                <hr>
                <a href="index.php" class="button is-primary">Voltar para a Página Inicial</a>
            </div>
        </div>
    </section>
</body>

</html>