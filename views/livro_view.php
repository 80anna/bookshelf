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