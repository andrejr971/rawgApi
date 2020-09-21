<?php 
  error_reporting(-1);
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include_once('../../controllers/GameController.php');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../../assets/redoc-logo.png" />
  <title>Rawg API</title>

  <link rel="stylesheet" href="../../styles.css">
  <link rel="stylesheet" href="./styles.css">
  <?php include('../../components/importsLink.php') ?>
</head>

<body>
  <div class="container-wrapper">
    <?php include_once('../../components/Sidebar.php') ?>

    <div>
      <?php include_once('../../components/Header.php') ?>

      <section class="flyer-game">
        <div class="background" style="background: url(<?= $data->background_image ?>), #000;"></div>

        <div class="flyer-game-description">
          <h1><?= $data->name ?></h1>
          <span>#<?= $data->rating_top ?> Top <?= getdate()['year'] ?></span>
        </div>
      </section>

      <main>
        <article class="container">
          <p><?= $data->description ?></p>

          <div class="game-expecification">
            <div>
              <video src="<?= $data->clip->clip ?>" controls muted loop>
              </video>
            </div>

            <div>
              <ul>
                <h4>Ratings</h4>
                <li>
                  <div class="ratings">
                    <?php
                        foreach ($data->ratings as $rating) {
                          ?>
                    <div>
                      <?= ucfirst($rating->title) ?>
                      <span class="porcent">
                        <span style="width: <?= $rating->percent ?>%;"></span>
                      </span>
                    </div>
                    <?php
                            }
                          ?>
                  </div>
                </li>
              </ul>
              
              <div class="game-genres">
                <h4>Genres</h4>
                <div>
                  <?php
                    foreach ($data->genres as $genre) {
                  ?>
                  <a href="#"><?= $genre->name ?></a>
                  <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="grid-screenshot">
            <?php
              foreach ($screenshots->results as $screenshot) {
            ?>
              <div class="card-screenshot">
                <img src="<?= $screenshot->image ?>" alt="<?= $screenshot->id ?>" />
              </div>
            <?php
              }
            ?>
          </div>

          <div class="tags">
            <?php
              foreach ($data->tags as $tag) {
            ?>
            <a href="#">
              <img src="<?= $tag->image_background ?>" alt="<?= $tag->slug ?>">
              <span><?= $tag->name ?></span>
            </a>
            <?php
              }
            ?>
          </div>

          <div class="store">
            <h3>Store</h3>
            <div>
              <?php
                foreach ($data->stores as $store) {
                  ?>
              <a href="<?= $store->url ?>" target="blank">
                <img src="<?= $store->store->image_background ?>" alt="<?= $store->store->slug ?>">
                <span><?= $store->store->name ?></span>
              </a>
              <?php
                }
                ?>
            </div>
          </div>
        </article>
      </main>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');

    const handleMenu = () => {
      const open = sidebar.classList.contains('open');

      if (!open) {
        sidebar.classList.add('open');
        sidebar.style.cssText = 'left: 0';
      } else {
        sidebar.classList.remove('open');
        sidebar.style.cssText = 'left: -120%';
      }
    }
  </script>
</body>

</html>