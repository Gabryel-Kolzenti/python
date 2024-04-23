<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/python.webp">
    <title>Aula</title>
    <style>
        #conteudo {
            display: none;
        }

        .texto {
            font-size: <?php echo $tamanho; ?>;
            font-family: <?php echo $fonte; ?>;
        }
    </style>
</head>

<body>

    <?php
    $tamanho = $_POST["tamanho"] ?? "";
    $cor = $_POST["cor"] ?? "";
    $fonte = $_POST["fonte"] ?? "";
    $texto = $_POST["texto"] ?? "";
    $mostra = 'none';
    $apaga = 'block';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($tamanho !== "" && $cor !== "" && $fonte !== "") {
            $mostra = 'block';
            $apaga = 'none';
        } else {
            $mostra = 'none';
            $apaga = 'block';
        }
    }

    ?>
    <div style="display: <?php echo $apaga; ?>;">
        <div class=" inicioAnimacao">
            <img src="img/icons8-java.gif" alt="">
            <img src="img/cobra-e-serpente-imagem-animada-0012.gif" alt="">
        </div>
    </div>

    <form action="aula.php" method="post" style="display: <?php echo $apaga; ?>;">
        <h2 style='margin-left: 5vw; color: #b7ca0c'>Aprenda e descreva sobre python com sua personalização!!</h2>
        <div class="container">
            <div class="conteudosIndividuais">
                <label for="itamanho">Tamanho da Fonte:</label>
                <select name="tamanho" id="itamanho">
                    <option value="1rem">1 rem</option>
                    <option value="1.2rem">1.2 rem</option>
                    <option value="1.4rem">1.4 rem</option>
                    <option value="1.6rem">1.6 rem</option>
                    <option value="2rem">2 rem</option>
                </select>
            </div>
            <br>

            <div class="conteudosIndividuais">
                <label for="icor">Escolha a Cor:</label>
                <input type="color" name="cor" id="icor">
            </div>
            <br>

            <div class="conteudosIndividuais">
                <label for="ifonte">Escolha a Fonte:</label>
                <select name="fonte" id="ifonte">
                    <option value="Courier New">Courier New</option>
                    <option value="Gill Sans">Gill Sans</option>
                    <option value="Impact">Impact</option>
                </select>
            </div>
            <br>

            <div class="conteudosIndividuais">
                <label for="itexto">Insira suas informações sobre python:</label><br>
                <textarea id="itexto" name="texto" rows="4" cols="50"></textarea>
            </div>
            <br>
            <input id="gerar" type="submit" value="Gerar">
        </div>
    </form>

    <style>
        h1,
        h2,
        h3,
        a {
            color: <?php echo $cor; ?>;
            font-family: <?php echo $fonte; ?> sans-serif;
            transition: 0.3s;
        }

        h1 {
            font-size: <?php echo $tamanho * 1.7; ?>;
        }

        h2 {
            font-size: <?php echo $tamanho * 1.5; ?>;
        }

        h3 {
            font-size: <?php echo $tamanho * 1.3; ?>;
        }

        a {
            font-size: <?php echo $tamanho * 1.5; ?>;
        }

        a:hover {
            transform: scale(1.03);
            transition: 0.3s;
            background-color: #09a4fd2f;
            padding: 0.3vh 0.6vw;
            border-radius: 12px;
        }

        a:active {
            transform: scale(1.05);
            transition: 0.3s;
        }
    </style>

    <div style="display: <?php echo $mostra; ?>;">

        <header>
            <img src="img/icons8-python-240.png" alt="">
            <div class="cabecalhoDireita">
                <a href="#IA">
                    <h2>Inteligencia Artificial</h2>
                </a>
                <a href="#espec">
                    <h2>Especificações</h2>
                </a>
                <a href="#historia">
                    <h2>História</h2>
                </a>
                <a href="#notas">
                    <h2>Anotações</h2>
                </a>
            </div>
        </header>

        <main>
            <h1>Python a lingaugem do futuro</h1>
            <img src="img/python.webp" alt="">
        </main>

        <section>
            <article id="IA">
                <div class="d-flexColuna">
                    <img src="img/ia.jpg" alt="" id='imagem'>
                    <div class="d-flex checks">
                        <input type="radio" name="group1" id="checkbox1" checked>
                        <input type="radio" name="group1" id="checkbox2">
                        <input type="radio" name="group1" id="checkbox3">
                    </div>
                </div>
                <div class="conteudoGeral">
                    <h3>Inteligencia artificial</h3>
                    <p>Devido à sua facilidade de uso, flexibilidade e poder, Python é amplamente adotada pela indústria de tecnologia e empresas líderes em todo o mundo. Desde startups até gigantes da tecnologia, organizações de todos os tamanhos confiam em Python para impulsionar suas iniciativas de IA e inovação.

                        Em resumo, Python emergiu como a linguagem dominante da Inteligência Artificial, capacitando desenvolvedores a criar soluções inovadoras que estão moldando o futuro. Se você está interessado em explorar o emocionante campo da IA, Python é o seu ponto de partida ideal.</p>
                </div>
            </article>
            <article id="espec">
                <div class="conteudoGeral">
                    <h3>Especificações</h3>
                    <p>Simplicidade e legibilidade: Sintaxe limpa e fácil de entender.
                        <br>Multiplataforma: Funciona em Windows, macOS e Linux.
                        <br>Interpretada: Código é executado linha por linha.
                        <br>Biblioteca padrão abrangente: Suporte para uma variedade de tarefas.
                        <br>Comunidade ativa: Grande quantidade de recursos e suporte disponíveis.
                        <br>Versatilidade: Pode ser usado em diversos domínios, como desenvolvimento web, análise de dados e IA.
                    </p>
                </div>
                <div class="d-flexColuna">
                    <img src="https://image.slidesharecdn.com/linguagempython-120331204904-phpapp01/85/linguagem-python-13-320.jpg" alt="" id='imagem' checked>
                    <div class="d-flex checks">
                        <input type="radio" name="group2" id="checkbox4">
                        <input type="radio" name="group2" id="checkbox5">
                        <input type="radio" name="group2" id="checkbox6">
                    </div>
                </div>
            </article>

            <article id='historia'>
                <div class="d-flexColuna">
                    <img src="img/criador.png" alt="" id='imagem'>
                    <div class="d-flex checks">
                        <input type="radio" name="group3" id="checkbox1">
                        <input type="radio" name="group3" id="checkbox2">
                        <input type="radio" name="group3" id="checkbox3">
                    </div>
                </div>
                <div class="conteudoGeral">
                    <h3>História</h3>
                    <p>Python foi criado por Guido van Rossum e lançado pela primeira vez em 1991. Van Rossum queria criar uma linguagem de programação simples e poderosa. Ele se inspirou em outras linguagens como ABC e Modula-3. O nome "Python" veio da admiração de Guido pelo grupo de comédia britânico "Monty Python".

                        Desde então, Python cresceu em popularidade devido à sua sintaxe limpa, legibilidade e uma vasta comunidade de desenvolvedores. É amplamente utilizado em diversos campos, incluindo desenvolvimento web, análise de dados, automação, IA e muito mais. Guido van Rossum liderou o desenvolvimento do Python por muitos anos antes de se aposentar em 2018. Atualmente, a linguagem é mantida por uma comunidade global de desenvolvedores.</p>
                </div>
            </article>
            <article id='notas'>
                <div class="conteudoGeral">
                    <h3>Notas do Usuário</h3>
                    <p>Aqui estão sua anotações:<br> <?php echo $texto; ?> </p></p>
            </div>
                <div class="d-flexColuna">
                    <img src="img/anota.png" alt="" id='imagem'>
                    <div class="d-flex checks">
                        <input type="radio" name="group4" id="checkbox1">
                        <input type="radio" name="group4" id="checkbox2">
                        <input type="radio" name="group4" id="checkbox3">
                    </div>
                </div>
            </article>
        </section>

        <footer>
            <h2>Desenvolvido por Gabryel Kolzenti | 2023 &copy;</h2>
        </footer>
    </div>

    <script src="main.js"></script>
</body>

</html>