<?php include ('script.php');
error_reporting(0);?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONSUMO API - POKEMON</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">
  </head>
  
  <body>
    <div class="jumbotron">
      <div class='row'>
        <div class="col-lg-6 col-md-7 col-12 mt-2 mb-2 mr-5 img-left">
          <img src="logo.png" alt="Logotipo Pokemon" class="img-fluid" width=400px height=300px>
        </div>     
          <form class="form-inline" name="formulario" method="post" action="index.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" name="nome">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
          </form>
      </div>
    </div>

    <section class="container">
      <div class='row mb-5'>
        <div class="card" style="width: 21.5em;margin: auto;">

          <?php if(!empty($pokemonAchado['img'])):?>
            <img class="card-img-top" src="<?= $pokemonAchado['img'] ?>" alt="<?= $pokemonAchado['name'] ?>">
          <?php endif;?>
            <hr>
            <div class="card-body">
              <h5 class="card-title"><?= $pokemonAchado['name'] ?></h5>
              <p class="card-text"><?php
                  if (!empty($pokemonAchado['type'])) {
                    echo "<h5>Tipos:</h5> ";
                  }
                  foreach ($pokemonAchado['type'] as $tipo) {
                    echo $tipo . ", ";
                  }?>
              </p>
              <p class="card-text"><?php
                  if (!empty($pokemonAchado['weaknesses'])) {
                    echo "<h5>Fraquezas:</h5> ";
                  }
                  foreach ($pokemonAchado['weaknesses'] as $fraqueza) {
                    echo $fraqueza . ", ";
                  }?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>