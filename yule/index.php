<?php
    require_once('pages/header.php');
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'food': {
                include('pages/categorie.php');
                break;
            }
            case 'fashion': {
                include('pages/categorie.php');
                break;
            }
            case 'decoration': {
                include('pages/categorie.php');
                break;
            }
            case 'contact': {
                include('pages/contact.php');
                break;
            }

        }
    } else {
        require_once('pages/home.php');
    }
    require_once('pages/footer.php');
?>