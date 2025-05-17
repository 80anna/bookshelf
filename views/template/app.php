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
                <li><a href="index" class="text-indigo-400 font-bold">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>

    </header>


    <main class="mx-auto max-w-screen-lg space-y-10">

        <?php require "views/{$view}_view.php"?>

    </main>

</body>
</html>