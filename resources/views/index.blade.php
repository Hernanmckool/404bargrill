<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <title>Buscador de YouTube</title>
  </head>
  <body>
    <header>
      <form class="Buscador" id="Buscador" action="#" method="post">
        <input type="text" id="q" placeholder="Busca algo...">
        <button type="submit" name="button">Buscar</button>
      </form>
    </header>
    <main class="row repet-bar">
      <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-1"></div>
      <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-10">
        <div class="YouTube-container">
          <div class="video-player">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen="allowfullscreen"></iframe>
            <h2>Bohemian Rhapsody</h2>
            <div class="desplegar" id="desplegar">
              <span>▽</span>
            </div>
            <div class="description" id="description">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="video-list" id="video-list"></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-1"></div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js" charset="utf-8"></script>
  </body>
</html>