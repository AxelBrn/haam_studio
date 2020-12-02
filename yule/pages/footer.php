        <?php
            require_once('repository/categoriesRepository.php');
            $categories = getAll();
        ?>
        
        <div class="box is-flex is-justify-content-center is-align-items-center" style="min-height: 420px; background-color: #D7D2C3; border-radius: 0">
            <div class="mt-5 is-justify-content-center is-align-items-center">
            <h2 class="title has-text-weight-bold has-text-right is-size-1">The products</h2>
                <div class="is-flex is-flex-direction-row is-flex-wrap-wrap is-justify-content-center">
                    <?php
                        for($i = 0; $i < count($categories); $i++) {
                            $class = "mx-3 mt-3";
                            if($i == (count($categories) - 1)) {
                                $class = "ml-3 mt-3";
                            }
                            echo "
                            <div class='".$class."'>
                                <div style='width: 20vw; height: 20vw; min-height: 300px; min-width: 300px;
                                 background-image: url(public/images/footer/".$categories[$i]->card_img."); 
                                 background-repeat: no-repeat; background-size: cover'>
                                    <div style='width: 100%; height: 100%; background-color: rgba(0,0,0, 0.3)'>
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
            <div class="container is-flex is-justify-content-center is-align-items-center" style="width: 100%; height: 100%;">
                <div>
                    <h2 class="title has-text-weight-bold has-text-centered is-size-1">Newsletter</h2>
                    <p class="mx-5" style="max-width: 500px">
                        Etiam nec odio vitae ligula venenatis pretium. Proin sit amet ligula ultrices, porta libero vel, dignissim lacus.
                        Etiam nec odio vitae ligula venenatis pretium. Proin sit amet ligula ultrices, porta libero vel, dignissim lacus.
                    </p>
                    <div class="field has-addons is-flex is-justify-content-center mt-6" >
                        <div class="field has-addons" style="-webkit-box-shadow: 0px 6px 13px -1px rgba(0,0,0,0.1); 
                                                            box-shadow: 0px 6px 13px -1px rgba(0,0,0,0.1);">
                            <p class="control">
                                <input class="input" type="email" placeholder="Email">
                            </p>
                            <p class="control">
                                <button class="button has-background-grey-lighter">
                                    <strong>OK</strong>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <footer class="footer is-flex is-justify-content-center is-align-items-center" style="background-color: #F4B500">
            <div class="is-flex is-flex-direction-row mx-6">
                <div class="content has-text-left mr-5">
                    <p><span class="has-text-weight-bold has-text-white"> CUSTOMERS SERVICE </span><br>
                    <span class="has-text-white-ter">
                        Nous contacter<br>
                        Livraison & suivi <br>
                        Retours</p>
                    </span>
                </div>
                <div class="content has-text-left">
                <p><span class="has-text-weight-bold has-text-white">INFORMATIONS PRATIQUES</span> <br>
                    <span class="has-text-white-ter">
                        Carrières<br>
                        Mentions Légales<br>
                        Protection des données</p>
                    </span>
                </div>
            </div>
        </footer>
    </body>
</html>