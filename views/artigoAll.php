<div class="blue">
    <h2 class="font-weight-bold">Todos Artigos</h2>
    <hr class="linha-dark" />

    <?php foreach ($artigos as $artigo) { ?>

        <ul>
            <a href="./?id=<?= $artigo->id ?>"><?= $artigo->titulo ?></a>
        </ul>

    <?php } ?>
</div>