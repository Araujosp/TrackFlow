.<?php
    require_once 'crud.php';

    if (isset($_GET['deletar'])) {
    $id = (int) $_GET['deletar'];
    delete($pdo, 'musicas', "id = $id");
    /*header("Location: index.php");*/
}
    $musicas = readAll($pdo, 'musicas');

?>

<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imagens/logo-com-fundo.png">
    <title>TrackFlow</title>
</head>

<body>
    <header class="menu">
        <img src="imagens/logo-com-fundo.png" id= "logo-header">
        <div class="title-header">
            <img src="imagens/logo-sem-fundo.png" alt="">
            <h2>TrackFlow</h2>
        </div>
        <a href="cadastro.php" class="title-header btn_cadastrar_produto">Cadastrar Musica</a>
    </header>
    <main class="main_index">
        <section class="list_estoque">
            <form method="GET" class="estoque">
                <table>
                    <tr class="linha_destaque">
                        <th>Nome</th>
                        <th>Artista</th>
                        <th>Gênero</th>
                        <th>Ano</th>
                        <th>Duração</th>
                        <th>Album</th>
                        <th></th>
                    </tr>
                    <?php foreach ($musicas as $musica): ?>
                        <tr>
                            <td><?= $musica['titulo'] ?></td>
                            <td><?= $musica['artista'] ?></td>
                            <td><?= $musica['genero'] ?></td>
                            <td><?= $musica['ano'] ?></td>
                            <td><?= $musica['duracao_segundos'] ?>s</td>
                            <td><?= $musica['album'] ?></td>
                            <td>
                                <a href="?deletar=<?= $musica['id'] ?>">Deletar musica</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </section>
    </main>
</body>

</html>