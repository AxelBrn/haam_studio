<?php
    require_once('repository/categoriesRepository.php');
    require_once('repository/subCategoriesRepository.php');
    require_once('repository/productsRepository.php');
    $category = getCategoryById($_GET['idCateg']);
    $subCategories = getSubCategoriesByCateg($_GET['idCateg']);
    $products = getProductsByCateg($_GET['idCateg']);
?>

<?php echo " <div class='hero is-medium' style='background-image: url(public/images/banner/".$category->banner.");'"; ?>>
  <div class="hero-body ">
    <div class="container">
      <h1 class="title ">
        <?php echo $category->label; ?>
      </h1>
    </div>
  </div>
</div>

<div class="container px-6">
    <div class="is-flex is-flex-direction-row is-align-items-center mx-6">
    <?php
        for($i = 0; $i < count($subCategories); $i++) {
            echo "<a href='#' class='checkbox'>
                    <input type='checkbox' disabled>
                        ".$subCategories[$i]->label."
                    </a>";
        }
    ?>
    </div>
</div>
