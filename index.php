.<?php
    require_once 'crud.php';

    if (isset($_GET['deletar'])) {
    $id = (int) $_GET['deletar'];
    delete($pdo, 'musicas', "id = $id");
    header("Location: index.php");
}
    $musicas = readAll($pdo, 'musicas');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imagens/logo-com-fundo.png">
    <title>TrackFlow - Suas Músicas</title>
</head>
<body>
    <header class="menu">
        <div class="title-header">
            <img src="imagens/logo-com-fundo.png" id="logo-header">
            <h2>TrackFlow</h2>
        </div>
        <a href="cadastro.php" class="btn_cadastrar_produto">Cadastrar Música</a>
    </header>

    <main>
        <section class="list_estoque">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Artista</th>
                        <th>Gênero</th>
                        <th>Ano</th>
                        <th>Duração</th>
                        <th>Álbum</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($musicas as $musica): ?>
                        <tr>
                            <td><?= $musica['titulo'] ?></td>
                            <td><?= $musica['artista'] ?></td>
                            <td><?= $musica['genero'] ?></td>
                            <td><?= $musica['ano'] ?></td>
                            <td><?= $musica['duracao_segundos'] ?>s</td>
                            <td><?= $musica['album'] ?></td>
                            <td class="td_acoes">
                                <a href="editar.php?id=<?= $musica['id'] ?>" class="btn-edit">Editar</a>
                                <a href="?deletar=<?= $musica['id'] ?>" class="btn-delete" onclick="return confirm('Deseja excluir?')">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="footer">
        <img src="imagens/logo-sem-fundo.png" alt="TrackFlow Logo">
    </footer>
</body>
</html>