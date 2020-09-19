<?php 
  error_reporting(-1);
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  include_once('../../controllers/GenresController.php');
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
      <header class="header-search">
        <button type="button" onclick="handleMenu()">
          <span class="material-icons">
            sort
          </span>
        </button>
        <a href="./index.php" class="field-search">
          <span class="material-icons">
            search
          </span>
          Search
        </a>
      </header>

      <main>
        <article class="container">
          <form action="" method="GET" class="header-genres">
            <select name="id" id="select-genre">
              <?php
                foreach ($genres as $genre) {
              ?>
                <option value="<?= $genre->id ?>" <?= intval($id) === $genre->id ? 'selected' : '' ?>>
                  <?= $genre->name ?>
                </option>
              <?php
                  }
                  ?>
            </select>
            <button type="submit">
              <span class="material-icons">
                filter_alt
              </span>
            </button>
          </form>

          <div class="grid">
            <?php 
          foreach ($data as $key => $game) {
            ?>
            <div class="card">
              <img src="<?= $game->background_image ?>" alt="<?= $game->slug ?>">

              <div class="card-body">
                <div class="card-genres">
                  <?php
                    $i = 0;
                    foreach ($game->genres as $genre) {
                      if(++$i > 3) break;
                  ?>
                  <span><?= $genre->name ?></span>
                  <?php
                    }
                  ?>
                </div>
                <strong><?= $game->name ?></strong>

                <div class="card-descriptions">
                  <ul>
                    <li>
                      <div class="ratings">
                        <?php
                    foreach ($game->ratings as $rating) {
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
                </div>

                <a href="../game/index.php?id=<?= $game->id ?>" class="open-game">
                  <span class="material-icons">
                    open_in_new
                  </span>
                </a>
              </div>
            </div>
            <?php
          }
          ?>
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