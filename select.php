<?php

require_once 'crud.php';

$musicas = readAll($pdo, 'musicas', 'id > 1');
// print_r($livros);

foreach ($musicas as $musica) {
    echo "ID: " . $musica['id'] . "<br>";
    echo "Nome: " . $musica['titulo'] . "<br>";
}

echo '<br><br><br><br><br><br>';

$musica = read($pdo, 'musicas', 'id = 255');
if ($musica) {
    echo "ID: " . $musica['id'] . "<br>";
    echo "Titulo: " . $musica['titulo'] . "<br>";
    echo "Genêro: " . $musica['genêro'] . "<br>";
    echo "Artista: " . $musica['artista'] . "<br>";
    echo "Ano: " . $musica['ano'] . "<br>";
    echo "Duração: " . $musica['duracao_segundos'] . "<br>";
    echo "Album: " . $musica['album'] . "<br>";
    } else {
    echo "Musica não encontrada.";
}

