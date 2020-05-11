<div class="comentarios">
    <div class="container">
        <h4>Deixe um comentário:</h4>
        <form role="form" action="./?class=Comentario&action=create&ArtigoId=<?= $_GET['ArtigoId'] ?>" method="post">
            <div class="form-group">
                <textarea class="form-control" rows="5" name="mensagem" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-info">Comentar</button>
        </form>

        <br />
    </div>
</div>
<br /><br />