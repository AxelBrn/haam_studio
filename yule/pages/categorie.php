<?php
    require_once('repository/categoriesRepository.php');
    $category = getById($_GET['idCateg']);
?>

<div class="hero is-medium">
  <div class="hero-body ">
    <div class="container">
      <h1 class="title ">
        <?php echo $category->label; ?>
      </h1>
    </div>
  </div>
</div>
