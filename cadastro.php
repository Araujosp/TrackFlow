<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imagens/logo-com-fundo.png">
    <title>TrackFlow - Cadastrar Música</title>
</head>
<body>
    <header class="menu">
        <div class="title-header">
            <a href="index.php" style="display: flex; align-items: center; gap: 15px; color: white;">
                <img src="imagens/logo-com-fundo.png" id="logo-header">
                <h2>TrackFlow</h2>
            </a>
        </div>
        <a href="index.php" class="btn_cadastrar_produto">Voltar para Lista</a>
    </header>

    <main class="main_form">
        <section class="container_cadastro">
            <div class="card_form">
                <h1 class="titulo_pag">Nova Música</h1>
                <p class="subtitulo_pag">Preencha os detalhes para adicionar à sua biblioteca.</p>
                
                <form action="processa_cadastro.php" method="POST" class="form_track">
                    <div class="input_group">
                        <label for="titulo">Título da Música</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Ex: Blinding Lights" required>
                    </div>

                    <div class="input_row">
                        <div class="input_group">
                            <label for="artista">Artista</label>
                            <input type="text" name="artista" id="artista" placeholder="The Weeknd" required>
                        </div>
                        <div class="input_group">
                            <label for="genero">Gênero</label>
                            <input type="text" name="genero" id="genero" placeholder="Pop">
                        </div>
                    </div>

                    <div class="input_row">
                        <div class="input_group">
                            <label for="ano">Ano de Lançamento</label>
                            <input type="number" name="ano" id="ano" placeholder="2020" min="1900" max="2026">
                        </div>
                        <div class="input_group">
                            <label for="duracao">Duração (segundos)</label>
                            <input type="number" name="duracao" id="duracao" placeholder="200">
                        </div>
                    </div>

                    <div class="input_group">
                        <label for="album">Álbum</label>
                        <input type="text" name="album" id="album" placeholder="After Hours">
                    </div>

                    <button type="submit" class="btn_submit">Salvar Música</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <img src="imagens/logo-sem-fundo.png" alt="TrackFlow Logo">
    </footer>
</body>
</html>