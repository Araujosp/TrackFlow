<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    
    // Pega os dados atualizados
    $dados = [
        'titulo'           => $_POST['titulo'],
        'artista'          => $_POST['artista'],
        'genero'           => $_POST['genero'],
        'ano'              => (int) $_POST['ano'],
        'duracao_segundos' => (int) $_POST['duracao'], 
        'album'            => $_POST['album']
    ];

    // Chama a função de update
    update($pdo, 'musicas', $dados, "id = $id");

    // Redireciona de volta
    header("Location: index.php");
    exit;
}
?>