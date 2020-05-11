<div class="text-white">
    <h2>Outros Artigos</h2>
    <hr />

    <?php foreach ($artigos as $artigo) { ?>

        <ul>
            <a href="./?id=<?= $artigo->id ?>"><?= $artigo->titulo ?></a>
        </ul>

    <?php } ?>
</div>