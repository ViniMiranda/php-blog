        <p><span class="badge badge-pill badge-primary"><?= $contagem ?></span> Comments:</p>
        <?php foreach ($comentarios as $comentario) { ?>
            <div class="row">

                <div class="col-sm-2 text-center">
                    <img src="public/imgs/avatar.jpeg" class="rounded-circle" height="65" width="65" alt="foto perfil" />
                    <p class="red"><?= $comentario->usuario ?></p>
                </div>

                <div class="col-sm-10">
                    <h4><small><?= $comentario->dataPostagem ?></small></h4>
                    <p>
                        <?= $comentario->mensagem ?>
                    </p>
                    <br /><br />
                </div>
            </div>
        <?php } ?>