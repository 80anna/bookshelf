<?php 

    require 'dados.php';

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
                <li><a href="" class="text-indigo-400 font-bold">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>

    </header>

    <main class="mx-auto max-w-screen-lg space-y-10">

        <form class="w-full flex space-x-2 mt-6">
            <input 
                type="text" 
                class="rounded-md bg-indigo-200 text-sm focus:outline-none px-2 py-1"
                placeholder="Pesquisar..."
            >
            <button type="submit">🔎</button>
        </form>

        <section class="grid grid-cols-1 flex gap-4 md:grid-cols-2 lg:grid-cols-3">
            
            <?php foreach($livros as $livro): ?>
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
            <?php endforeach; ?>                 

        </section>

    </main>

</body>
</html>