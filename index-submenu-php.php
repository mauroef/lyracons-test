<?php
    $sub_menu = array(
      array(
          'titulo' => 'Ropa',
          'url' => '/ropa.html
      '),
      array(
          'titulo' =>'Electronica',
          'url' => '/electronica.html'
      ),
      array(
          'titulo' => 'Higiene',
          'url' =>'/higiene.html'
      ),
      array(
          'titulo' => 'Alimentos',
          'url' => '/alimentos.html'
      ),
      array(
          'titulo' => 'Otros',
          'url' => '/otros.html'
      )
  );

  function renderSubMenu($menu) {
    foreach ($menu as $key => $value) {
      echo '<li><a href="' . trim($value['url']) . '">' . $value['titulo'] . '</a></li>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Test - Frontend con submenu php</title>
</head>

<body class="body">
  <header class="header">
    <div class="header__brand"></div>
  </header>
  <nav class="navbar">
    <ul class="navbar__list">
      <li><a href="#" id="inicio">inicio</a></li>
      <li class="dropdown">
        <a href="#">productos</a>
        <ul class="dropdown__content">
          <?php renderSubMenu($sub_menu) ?>
        </ul>
      </li>
      <li><a href="#" id="nosotros">nosotros</a></li>
      <li><a href="#" id="compras">compras</a></li>
    </ul>
  </nav>
  <aside class="sidebar">
    <span class="sidebar__text"></span>
  </aside>
  <main class="main">
    <article class="main__item"></article>
    <article class="main__item"></article>
    <article class="main__item"></article>
    <article class="main__item"></article>
    <article class="main__item"></article>
    <article class="main__item"></article>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>