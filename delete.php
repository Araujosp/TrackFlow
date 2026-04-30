<?php

require_once 'crud.php';

$idmusica = 20; // pode vir de um $_GET

$deleted = delete($pdo, 'musicas', 'id = '.$idmusica);

if ($deleted) {
    echo 'musica excluída com sucesso.';
} else {
    echo 'Nenhuma musica encontrada para excluir.';
}