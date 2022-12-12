<?php 
if (empty($_GET['page'])) {
    require_once "view/home.view.php";
}
    else {
        switch ($_GET['page']) {
            case 'acceuil':
                require_once "view/home.view.php";
                break;
            case 'test': 
                echo 'toto';
                break;
        }
    }
?>