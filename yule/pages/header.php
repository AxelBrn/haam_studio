<?php
  require ("repository/categoriesRepository.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/bulma.css" rel="stylesheet">
    <link href="/public/css/stylesheet.css" rel="stylesheet">
    <link href="/public/css/axel.css" rel="stylesheet">
    <script src="/public/script/script.js"></script>
    <script src="https://unpkg.com/eva-icons"></script>
    <title>Yule - Brought to you</title>
</head>
<body>
  <header>

    <div id="header" class="cotainer">
      <nav class="navbar is-white p-4 level" id="navbar">
        <div class="navbar-brand level-item has-text-centered">
          <a class="navbar-item" href="/">
            <img src="/public/images/logo.png">
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu" data-target2="navMenuChild" data-target3="navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div class="navbar-menu" id="navMenu">
          <div class="navbar-end is-pulled-right level-item" id="navMenuChild" >
<?php
$categories = getAll();
  for($i = 0; $i < count($categories); $i++ ){
    echo ("<a href=\"/?page=".strtolower($categories[$i]->label)."\" class=\"navbar-item px-5\">".$categories[$i]->label."</a>");
  }
?>
            <a href="/?page=news" class="navbar-item px-5">News</a>
            <a href="/?page=contact" class="navbar-item px-5">Contact</a>
            <a href="/?page=basket" class="navbar-item px-5">
              <span class="icon">
                <i data-eva="person-outline"></i>
              </span>
            </a>
            <a href="/?page=account" class="navbar-item px-5">
              <span class="icon">
                <i data-eva="shopping-cart-outline"></i>
              </span>
            </a>
            
            </div>
          </div>
      </nav>
    </div>

  </header>

  <script>
    eva.replace()
  </script> 