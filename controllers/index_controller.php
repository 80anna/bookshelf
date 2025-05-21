<?php 

    $livros = (new DB)->livros();

    view('index', [
        'livros' => $livros
    ]);

?>