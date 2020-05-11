<?php
header("Content-Type: text/html; charset=utf-8");
require_once("controllers/ArtigosController.php");
require_once("controllers/ComentariosController.php");

$artigosController = new ArtigosController();
$comentariosController = new ComentariosController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog of pain</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>

<body>

    <div class="jumbotron text-white text-center">
        <h1>Lendas dos esportes</h1>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3"></div>

            <div class="col-sm-6">
                <hr />

                <!-- Conteudo -->

                <?php $artigosController->read() ?>

                <!-- Formulario de comentarios -->

                <?php $comentariosController->create() ?>
                -

                <!-- Comentarios -->

                <?php $comentariosController->listAll() ?>

            </div>

            <!-- Artigos -->
            <div class="col-sm-3 sidenav">
                <?php $artigosController->listAll() ?>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php include(__DIR__ . "/includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>