<?php
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'food': {
                echo 'Hello in food page';
                break;
            }
        }
    } else {
        require_once('pages/home.php');
    }
?>