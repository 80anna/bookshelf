<?php 

    require 'dados.php';

    $id = $_REQUEST['id'];

    $filtrado = array_filter($livros, fn($l) => $l['id'] == $id);

    $livro = array_pop($filtrado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-indigo-100 text-indigo-900">

    <header class="bg-indigo-200">

        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Bookshelf</div>
            
            <ul class="flex space-x-4">
                <li><a href="index.php" class="text-indigo-400 font-bold">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>

    </header>

    <main class="mx-auto max-w-screen-lg space-y-10">

        <?=$livro['titulo']?>
        <div class="bg-indigo-200 p-2 rounded">
            <div class="flex">
                <div class="w-1/3">img</div>
                <div class="space-y-1">
                    <a href="/livro.php?id=<?=$livro['id']?>" class="hover:underline"><div class="font-semibold"><?=$livro['titulo']?></div></a>
                    <div class="text-xs italic"><?=$livro['autor']?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ 4 avaliações</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?=$livro['descricao']?>
            </div>
        </div>

    </main>

</body>
</html>