<?php
    $url = explode('/', $_SERVER['REQUEST_URI']);

  function active(String $getRoute) {
    global $url;

    $path = in_array($getRoute, $url);

    if ($path) {
      return  'active';
    }
    if ($getRoute === 'home' && !in_array('pages', $url)) {
      return 'active';
    }

    return  '';
  }
?>

<aside class="left-menu" id="sidebar">
  <div class="logo-menu">
    <div>
      <img src="<?= in_array('pages', $url) ? '../..' : '.' ?>/assets/redoc-logo.png" alt="Rawg Api logo">
      <h3>Rawg API</h3>
    </div>
  </div>
  <nav class="menu">
    <ul class="menu-group">
      <li class="menu-item <?= active('home') ?>">
        <a href="<?= in_array('pages', $url) ? '../..' : '.' ?>/index.php">
          <span class="material-icons">
            home
          </span>
          Home
        </a>
      </li>
      <li class="menu-item <?= active('search') ?>">
        <a href="./index.php">
          <span class="material-icons">
            search
          </span>
          Search
        </a>
      </li>
      <li class="menu-item <?= active('genres') ?>">
        <a href="<?= in_array('pages', $url) ? '../..' : '.' ?>/pages/genres/index.php">
          <span class="material-icons">
            view_module
          </span>
          Genres
        </a>
      </li>
    </ul>
  </nav>
  <div class="menu-footer">
    <strong>api@rawg.io</strong>
  </div>
</aside>