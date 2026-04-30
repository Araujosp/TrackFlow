<?php

require_once 'crud.php';

$idMusica = 22; // pode vir de um $_GET
$dadosAtualizados = [
    'titulo' => 'Wait a Minute', // pode vir de um $_POST 
    'artista' => 'Willow',
    'duracao_segundos' => 196,
    'genero' => 'R&B',
    'album' => 'Ardipithecus',
    'ano'=>2015
];

$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, 'id = '.$idMusica);

if ($linhasAfetadas > 0) {
    echo "Musica atualizada com sucesso.";
} else {
    echo "Nenhuma Musica encontrado para atualizar.";
}