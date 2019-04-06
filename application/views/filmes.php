
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Base de dados para o nosso chatbot">
    <meta name="author" content="Deusdete Filho">
    <title>BotFilmes</title>

    <!-- Bootstrap core CSS -->
<link href="<?= base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>bootstrap/album.css" rel="stylesheet">
  </head>
  <body>
    <header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>BotFilmes</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Cadastro de Filmes</h1>
      <p class="lead text-muted">Todos os filmes cadastrados aqui, serão usados como base de dados para o nosso chatbot.</p>
      <p>
        <a href="<?=base_url();?>/index.php/filmes/cadastro" class="btn btn-primary my-2"><b>+</b> Cadastrar Filme</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

        <? foreach ($filmes as $f) {?>
        <div class="col-md-2">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $f->imagem;?>">
            <div class="card-body">
              <p class="card-text"> <?= $f->titulo;?>.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="index.php/filmes/exibir/<?=$f->id;?>"><button type="button" class="btn btn-sm btn-outline-secondary">Exibir</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?}?>


      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">top</a>
    </p>
    <p>BotFilmes &copy; Direitos Reservados</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?= base_url();?>/js/jquery-slim.min.js"><\/script>')</script>

      <script src="<?= base_url();?>/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
