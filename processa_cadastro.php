<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados do formulário e monta o array para o banco
    $dados = [
        'titulo'           => $_POST['titulo'],
        'artista'          => $_POST['artista'],
        'genero'           => $_POST['genero'],
        'ano'              => (int) $_POST['ano'],
        'duracao_segundos' => (int) $_POST['duracao'], // Mapeando 'duracao' do form para a coluna correta
        'album'            => $_POST['album']
    ];

    // Chama a função de inserção
    create($pdo, 'musicas', $dados);

    // Redireciona de volta para a tela inicial
    header("Location: index.php");
    exit;
}
?>