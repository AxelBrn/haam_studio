        <?php
            require_once('repository/categoriesRepository.php');
            $categories = getAllCategories();
        ?>
        
        <div class="box box-products is-flex is-justify-content-center is-align-items-center">
            <div class="mt-5 is-justify-content-center is-align-items-center">
            <h2 class="title has-text-weight-bold has-text-right is-size-1">Our products</h2>
                <div class="is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-center">
                    <?php
                        for($i = 0; $i < count($categories); $i++) {
                            $class = "mx-3 mt-3";
                            if($i == (count($categories) - 1)) {
                                $class = "ml-3 mt-3";
                            }
                            echo "
                            <div class='".$class."'>
                                <div class='card-product' style='background-image: url(public/images/footer/".$categories[$i]->card_img."); 
                                 '>
                                    <div class='is-flex is-justify-content-center is-align-items-center max-size transparent-black'>
                                    <a class='button is-success is-rounded' href='/?page=".strtolower($categories[$i]->label)."&idCateg=".$categories[$i]->id."'>See in shop</a>
                                    </div>
                                </div>
                                <p class='has-text-centered mt-4'>".$categories[$i]->label."</p>
                                </div>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container is-flex is-align-items-center" style="min-height: 380px">
            <div class="container max-size is-flex is-justify-content-center is-align-items-center">
                <div>
                    <h2 class="title has-text-weight-bold has-text-centered is-size-1">Newsletter</h2>
                    <p class="mx-5" style="max-width: 500px">If you wish to be notified when new products launch on yule, don't hesitate to subscribe to our newsletter. We will also keep you updated on any news we have for yule or the christmas markets.</p>
                    <div class="field has-addons is-flex is-justify-content-center mt-6" >
                        <div class="field has-addons elevation">
                            <p class="control">
                                <input class="input" type="email" placeholder="Email">
                            </p>
                            <p class="control">
                                <button class="button has-background-grey-lighter">
                                    <strong>Subscribe</strong>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <footer class="footer is-flex is-justify-content-center is-align-items-center">
            <div class="is-flex is-flex-direction-row mx-6">
                <div class="content has-text-left mr-5">
                    <p><span class="has-text-weight-bold has-text-white">CUSTOMER SERVICE</span><br>
                    <span class="has-text-white-ter">
                        Contact us<br>
                        Delivery & Tracking <br>
                        Returns</p>
                    </span>
                </div>
                <div class="content has-text-left">
                <p><span class="has-text-weight-bold has-text-white">PRATICAL INFORMATION</span> <br>
                    <span class="has-text-white-ter">
                        Jobs<br>
                        Legal mentions<br>
                        Protection of personnal data</p>
                    </span>
                </div>
            </div>
        </footer>
    </body>
    <script>
        eva.replace()
    </script>
</html>