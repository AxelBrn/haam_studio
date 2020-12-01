<?php
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'food': {
                echo 'Hello in food page';
                break;
            }
        }
    } else {
        include('pages/home.php');
    }
?>