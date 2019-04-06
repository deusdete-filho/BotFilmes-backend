
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
          <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo">
          </div>
          <div class="form-group">
            <label>Ano lançamento</label>
            <select class="form-control" name="ano">
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
            </select>
          </div>

          <div class="form-group">
            <label>Gênero</label>
            <select class="form-control" name="genero">
              <option>Ação</option>
              <option>Animação</option>
              <option>Aventura</option>
              <option>Cinema de arte</option>
              <option>Chanchada</option>
              <option>Cinema catástrofe</option>
              <option>Comédia</option>
              <option>Comédia romântica</option>
              <option>Comédia dramática</option>
              <option>Comédia de ação</option>
              <option>Dança</option>
              <option>Documentário</option>
              <option>Docuficção</option>
              <option>Drama</option>
              <option>Espionagem</option>
              <option>Faroeste (ou western)</option>
              <option>Ficção científica</option>
              <option>Filmes de guerra</option>
              <option>Nacional</option>
              <option>Musical</option>
              <option>Filme policial</option>
              <option>Romance</option>
              <option>Seriado</option>
              <option>Suspense</option>
              <option>Terror (ou horror)</option>
            </select>
          </div>
          <div class="form-group">
            <label>Duração</label>
            <input type="text" class="form-control" name="tempo">
          </div>

          <div class="form-group">
            <label>Avaliação</label>
            <input type="text" class="form-control" name="avaliacao">
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control"rows="3" name="descricao"></textarea>
          </div>
          <div class="form-group">
            <label>Direção</label>
            <input type="text" class="form-control" name="direcao">
          </div>
          <div class="form-group">
            <label>Elenco (Principal)</label>
            <input type="text" class="form-control" name="elenco">
          </div>
          <div class="form-group">
            <label>Url</label>
            <input type="text" class="form-control" name="url">
          </div>
          <div class="form-group">
            <label>Cartaz do Filme</label>
            <input type="file" class="form-control-file" name="imagem">
          </div>
          <button type="submit" class="btn btn-primary my-2">Cadastrar Filme</a>

        </form>

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
