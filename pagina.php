<?php
require_once 'crud.php';

$novaMusica = [
    'titulo' => 'Wait a Minute', // pode vir de um $_POST 
    'artista' => 'Willow',
    'duracao_segundos' => 196,
    'genero' => 'R&B',
    'album' => 'Ardipithecus',
    'ano'=>2015
];

$idNovaMusica = create($pdo, 'musicas', $novaMusica);
echo "Novo Musica inserida com ID: $idNovaMusica";