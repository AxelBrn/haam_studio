<?php
    require_once('repository/categoriesRepository.php');
    require_once('repository/subCategoriesRepository.php');
    require_once('repository/productsRepository.php');
    $category = getCategoryById($_GET['idCateg']);
    $subCategories = getSubCategoriesByCateg($_GET['idCateg']);
    $products = getProductsByCateg($_GET['idCateg']);

    if(isset($_GET['subCateg'])) {
        $products = getProductsBySubCateg($_GET['subCateg']);
    }
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

<div class="container px-6 my-6">
    <div class="is-flex is-flex-direction-row is-align-items-center is-flex-wrap-wrap mx-6 py-6">
    <?php
        for($i = 0; $i < count($subCategories); $i++) {
            if(isset($_GET['subCateg']) && $subCategories[$i]->id == $_GET['subCateg']) {
                echo "<a href='?page=".strtolower($category->label)."&idCateg=".$category->id."&subCateg=".$subCategories[$i]->id."' class='checkbox mr-6 is-flex is-flex is-align-items-center'>
                        <span class='icon mr-1'>
                            <i data-eva='checkmark-square-2-outline'></i>
                        </span>
                        ".$subCategories[$i]->label."
                    </a>";
            } else {
                echo "<a href='?page=".strtolower($category->label)."&idCateg=".$category->id."&subCateg=".$subCategories[$i]->id."' class='checkbox mr-6 is-flex is-flex is-align-items-center'>
                        <span class='icon mr-1'>
                            <i data-eva='square-outline'></i>
                        </span>
                        ".$subCategories[$i]->label."
                    </a>";
            }
        }
        if(isset($_GET['subCateg'])) {
            echo "<a href='?page=".strtolower($category->label)."&idCateg=".$category->id."' class='checkbox mr-6 is-flex is-flex is-align-items-center'>
                        <span class='icon mr-1'>
                            <i data-eva='square-outline'></i>
                        </span>
                        See everything
                    </a>";
        } else {
            echo "<a href='?page=".strtolower($category->label)."&idCateg=".$category->id."' class='checkbox mr-6 is-flex is-flex is-align-items-center'>
                        <span class='icon mr-1'>
                            <i data-eva='checkmark-square-2-outline'></i>
                        </span>
                        See everything
                    </a>";
        }
    ?>
    </div>

    <div class="mx-6 mb-6 is-flex is-flex-direction-row is-flex-wrap-wrap">
        <?php
            for($i = 0; $i < count($products); $i++) {
                echo "<div class='mr-6 my-6'>
                <div class='product' style='background-image: url(public/images/products/".$products[$i]->image.");'>
                </div>
                <p class'mt-2'><strong>".$products[$i]->label."</strong><br>
                ".$products[$i]->price." €
                </p>
            </div>";
            }
        ?>
    </div>

</div>

<script>
    eva.replace()
</script> 
