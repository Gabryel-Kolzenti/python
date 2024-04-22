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
        h1, h2, h3, a{
    color: <?php echo $cor; ?>;
}
    </style>
</head>

<body>

    <?php
    $tamanho = $_POST["tamanho"] ?? "";
    $cor = $_POST["cor"] ?? "";
    $fonte = $_POST["fonte"] ?? "";
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

    <form action="aula.php" method="post" style="display: <?php echo $apaga; ?>;">

        <label for="itamanho">Tamanho da Fonte:</label>
        <select name="tamanho" id="itamanho">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt">14</option>
            <option value="22pt">20</option>
            <option value="38pt">38</option>
        </select>
        <br>

        <label for="icor">Escolha a Cor:</label>
        <input type="color" name="cor" id="icor">
        <br>

        <label for="ifonte">Escolha a Fonte:</label>
        <select name="fonte" id="ifonte">
            <option value="Courier New">Courier New</option>
            <option value="Gill Sans">Gill Sans</option>
            <option value="Impact">Impact</option>
        </select>
        <br>
        <input id="gerar" type="submit" value="Gerar">

    </form>

    <div style="display: <?php echo $mostra; ?>;">

        <header>
            <img src="img/icons8-python-240.png" alt="">
            <div class="cabecalhoDireita">
                <a href="">
                    <h2>Especificidades</h2>
                </a>
                <a href="">
                    <h2>Sobre</h2>
                </a>
                <a href="">
                    <h2>História</h2>
                </a>
            </div>
        </header>

        <main>
            <h1>Python a lingaugem do futuro</h1>
            <img src="img/python.webp" alt="">
            <div class="cobraAnimada">
                <img src="img/cobra-e-serpente-imagem-animada-0012.gif" alt="">
            </div>
        </main>

        <section>
            <article>
                <img src="img/ia.jpg" alt="">
                <div class="conteudoGeral">
                    <h3>Inteligencia artificial</h3>
                    <p>Devido à sua facilidade de uso, flexibilidade e poder, Python é amplamente adotada pela indústria de tecnologia e empresas líderes em todo o mundo. Desde startups até gigantes da tecnologia, organizações de todos os tamanhos confiam em Python para impulsionar suas iniciativas de IA e inovação.

Em resumo, Python emergiu como a linguagem dominante da Inteligência Artificial, capacitando desenvolvedores a criar soluções inovadoras que estão moldando o futuro. Se você está interessado em explorar o emocionante campo da IA, Python é o seu ponto de partida ideal.</p></div>
            </article>
            <article>
                <div class="conteudoGeral">
                    <h3>Inteligencia artificial</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium porro quo suscipit sequi dolor, tempora expedita animi, aperiam debitis autem, error repudiandae facilis eveniet iusto dicta accusantium officiis rem aliquid!</p>
                </div>
                <img src="img/ia.jpg" alt="">
            </article>
            <article>
                <img src="img/ia.jpg" alt="">
                <div class="conteudoGeral">
                    <h3>Inteligencia artificial</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium porro quo suscipit sequi dolor, tempora expedita animi, aperiam debitis autem, error repudiandae facilis eveniet iusto dicta accusantium officiis rem aliquid!</p>
                </div>
            </article>
            <article >
                <div class="conteudoGeral">
                    <h3>Inteligencia artificial</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium porro quo suscipit sequi dolor, tempora expedita animi, aperiam debitis autem, error repudiandae facilis eveniet iusto dicta accusantium officiis rem aliquid!</p>
                </div>
                <img src="img/ia.jpg" alt="">
            </article>
            <article >
                <img src="img/ia.jpg" alt="">
                <div class="conteudoGeral">
                    <h3>Notas do usuario</h3>
                    <p name="notas"></p>
                </div>
            </article>
        </section>

        <footer><h2>Desenvolvido por Gabryel Kolzenti | 2023 &copy;</h2></footer>
    </div>

    <script src="main.js"></script>
</body>

</html>