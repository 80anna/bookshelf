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
                    <a href="/livro?id=<?=$livro['id']?>" class="hover:underline"><div class="font-semibold"><?=$livro['titulo']?></div></a>
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