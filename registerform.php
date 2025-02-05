
<!DOCTYPE html>
<html lang="en" data-theme="light" style="background-color: black;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

    <style>
        .button {
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body style="display: flex; justify-content:center; align-items:center; height: 100vh;">
    <div class="box" style="min-height:60%; min-width:50vh; max-height:70%; max-width:50vh">
        <h1 class="title is-size-3 has-text-weight-semibold has-text-centered mt-5">Cadastro</h1>
        <div style="padding-left:25px ; padding-right:25px">
            <form action="identificacao.php" method="GET">
                <div class="field">
                    <input type="hidden" name="jogo" id="jogo">
                    <input type="hidden" name="precoTotal" id="precoTotal">
                    <input type="hidden" name="nome" id="nome">
                    <input type="hidden" name="dataJogo" id="dataJogo">
                    <input type="hidden" name="localJogo" id="localJogo">
                    <label class="label">Nome Completo</label>
                    <div class="control">
                        <input class="input" type="text" name="nomeusuario" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Usuário</label>
                    <div class="control">
                        <input class="input" type="text" name="usuarioreg" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input class="input" type="password" name="senhareg" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Confirme a Senha</label>
                    <div class="control">
                        <input class="input" type="password" name="confirmar_senhareg" required>
                    </div>
                </div>
                <div class="field is-grouped mt-4">
                    <div class="control">
                        <button class="button is-primary" type="submit">Cadastrar</button>
                    </div>
                    <div class="control">
                        <a class="button is-light" href="identificacao.php">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Recupera os dados da URL
        const urlParams = new URLSearchParams(window.location.search);
        const jogo = urlParams.get('jogo');
        const precoTotal = urlParams.get('precoTotal');
        const nome = urlParams.get('nome');
        const data = urlParams.get('dataJogo');
        const local = urlParams.get('localJogo');

        // Preenche os campos ocultos
        document.getElementById('jogo').value = jogo;
        document.getElementById('precoTotal').value = precoTotal;
        document.getElementById('nome').value = nome;
        document.getElementById('dataJogo').value = data;
        document.getElementById('localJogo').value = local;
    </script>

</body>

</html>