<?php
$autor = "Vinicius";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <div class="jumbotron"></div>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3"></div>

            <div class="col-sm-6">
                <hr />

<!-- Titulo -->

                <div class="conteudo">
                    <div class="container">
                        <h2>Titulo do Post</h2>
                        <h5>
                            <i class="fa fa-clock-o" aria-hidden="true"></i> Postado por <?= $autor ?>,
                            Sep 27, 2015.
                        </h5>
                        <h5>
                            <span class="badge badge-primary">Esportes</span>
                            <span class="badge badge-success">Teino</span>
                            <span class="badge badge-danger">Lendas</span>
                        </h5>
                        <br />
                        <h5>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.
                        </h5>
                    </div>
                    <br />
                </div>

                <br /><br />

<!-- Formulario de comentarios -->

                <div class="comentarios">
                    <div class="container">
                        <h4>Deixe um comentário:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-info">Comentar</button>
                        </form>
                        <br />
                    </div>
                </div>
                <br /><br />

                <p><span class="badge badge-pill badge-primary">2</span> Comments:</p>
                <br />

<!-- Comentario -->

                <div class="row">

                    <div class="col-sm-2 text-center">
                        <img src="public/imgs/avatar.jpeg" class="rounded-circle" height="65" width="65" alt="foto perfil" />
                        <p class="red">killmepls</p>
                    </div>
                    <div class="col-sm-10">
                        <h4><small>Out 15, 2019</small></h4>
                        <p>
                            I am so happy for you man! Finally. I am looking forward to read
                            about your trendy life. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                        <br />
                        <p><span class="badge badge-pill badge-primary"><? ?>1</span> Comment:</p>
                        <br />
                        <div class="comentario">

                        
                        </div>
                        
<!-- Resposta -->

                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <img src="public/imgs/h.jpeg" class="rounded-circle" height="65" width="65" alt="foto perfil" />
                                <p class="green">ck333</p>
                            </div>
                            <div class="col-xs-10">
                                <h4><small>Sep 25, 2015, 8:28 PM</small></h4>
                                <p>Me too! WOW!</p>
                                <button type="button" class="btn btn-primary">Responder</button>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Artigos -->

            <div class="col-sm-3 sidenav">
                <div class="artigos text-white">
                    <h4>Mais Artigos</h4>
                    <hr />
                    <ul class="">
                        <li><a href="#section1">Home</a></li>
                        <li><a href="#section2">Friends</a></li>
                        <li><a href="#section3">Family</a></li>
                        <li><a href="#section3">Photos</a></li>
                    </ul>
                    <br />
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Blog.." />
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- Footer -->

    <footer class="footer page-footer font-small blue pt-4 text-white">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>
                        Here you can use rows and columns to organize your footer
                        content.
                    </p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3" />

                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3">
            © 2020 Copyright: Vinícius Miranda
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>