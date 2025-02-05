<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>

    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Identificação</h1>
            <div class="columns is-centered">
                <!-- Login -->
                <div class="column is-5">
                    <div class="box">
                        <h2 class="subtitle">Já tenho cadastro</h2>
                        <form action="finalizarCompra.php" method="GET">
                            <div class="field">
                                <input type="hidden" name="jogo" id="jogo">
                                <input type="hidden" name="precoTotal" id="precoTotal">
                                <input type="hidden" name="nome" id="nome">
                                <input type="hidden" name="dataJogo" id="dataJogo">
                                <input type="hidden" name="localJogo" id="localJogo">
                                <label class="label">E-mail</label>
                                <div class="control">
                                    <input class="input" type="email" name="email" placeholder="Digite seu e-mail"
                                        required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Senha</label>
                                <div class="control">
                                    <input class="input" type="password" name="senha" placeholder="Digite sua senha"
                                        required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary is-fullwidth" type="submit">Entrar</button>
                                </div>
                            </div>
                        </form>
                        <p class="has-text-centered">
                            <a href="#">Esqueci a senha</a> | <a href="#">Esqueci o e-mail</a>
                        </p>
                    </div>
                </div>

                <div class="is-divider-vertical" data-content="OU"></div>

                <!-- Cadastro -->
                <div class="column is-5">
                    <div class="box">
                        <h2 class="subtitle">Quero criar um cadastro</h2>
                        <form action="registerform.php" method="GET">
                            <div class="field">
                                <label class="label">E-mail</label>
                                <input type="hidden" name="jogo" id="jogo">
                                <input type="hidden" name="precoTotal" id="precoTotal">
                                <input type="hidden" name="nome" id="nome">
                                <input type="hidden" name="dataJogo" id="dataJogo">
                                <input type="hidden" name="localJogo" id="localJogo">
                                <div class="control">
                                    <input class="input" type="email" name="email" placeholder="Digite seu e-mail"
                                        required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary is-fullwidth" type="submit">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Recupera os dados da URL
        const urlParams = new URLSearchParams(window.location.search);
        const jogo = urlParams.get('jogo');
        const precoTotal = urlParams.get('precoTotal');
        const nome = urlParams.get('nome');
        const data = urlParams.get('dataJogo');
        const local = urlParams.get('localJogo');

        // Função para preencher todos os inputs ocultos com o mesmo nome
        function preencherCamposOcultos(nomeCampo, valor) {
            document.querySelectorAll(`input[name="${nomeCampo}"]`).forEach(input => {
                input.value = valor;
            });
        }

        // Preenche os campos ocultos em ambos os formulários
        preencherCamposOcultos("jogo", jogo);
        preencherCamposOcultos("precoTotal", precoTotal);
        preencherCamposOcultos("nome", nome);
        preencherCamposOcultos("dataJogo", data);
        preencherCamposOcultos("localJogo", local);
    </script>

</body>

</html>