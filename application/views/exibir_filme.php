
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
    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>bootstrap/album.css" rel="stylesheet">
  </head>
  <body>
    <header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>BotFilmes</strong></a>
      </a>
    </div>
  </div>
</header>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
        <form method="post" action="salvar/" enctype="multipart/form-data">

      <div class="row">
          <div class="col-md-2">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?=$filme[0]->imagem;?>">
              <div class="card-body">
            </div>
        </div>
      </div>

    <div class="col-md-8">

          <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?=$filme[0]->titulo;?>">
          </div>
          <div class="form-group">
            <label>Ano lançamento</label>
            <input class="form-control" name="ano" value="<?=$filme[0]->ano;?>">
          </div>

          <div class="form-group">
            <label>Gênero</label>
            <input class="form-control" name="genero" value="<?=$filme[0]->genero;?>">
          </div>
          <div class="form-group">
            <label>Duração</label>
            <input type="text" class="form-control" name="tempo" value="<?=$filme[0]->tempo;?>">
          </div>

          <div class="form-group">
            <label>Avaliação</label>
            <input type="text" class="form-control" name="avaliacao" value="<?=$filme[0]->avaliacao;?>">
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control"rows="3" name="descricao"><?=$filme[0]->descricao;?></textarea>
          </div>
          <div class="form-group">
            <label>Direção</label>
            <input type="text" class="form-control" name="direcao" value="<?=$filme[0]->direcao;?>">
          </div>
          <div class="form-group">
            <label>Elenco (Principal)</label>
            <input type="text" class="form-control" name="elenco" value="<?=$filme[0]->elenco;?>">
          </div>
          <div class="form-group">
            <label>Url</label>
            <input type="text" class="form-control" name="url" value="<?=$filme[0]->url;?>">
          </div>
          <div class="form-group">
            <label>Cartaz do Filme</label>
            <input type="text" class="form-control-file" name="imagem" value="<?=$filme[0]->imagem;?>">
          </div>
          <button type="submit" class="btn btn-primary my-2">Atualizar</a>

        </form>

      </div>
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
