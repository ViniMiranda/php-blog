<div class="conteudo">
    <div class="container">
        <h2><?= $artigo->titulo ?></h2>
        <h5>
            <i class="fa fa-clock-o" aria-hidden="true"></i> Postado por <?= $artigo->autor ?>,
            <?= $artigo->dataPostagem ?>.
        </h5>

        <br />
        <h5>
            <?= $artigo->conteudo ?>
        </h5>
    </div>
    <br />
</div>

<br /><br />