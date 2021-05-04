
<?php require('../controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accueil') {
        accueil();
    }elseif ($_GET['action'] == 'faq') {
        faq();
    }elseif ($_GET['action'] == 'contact') {
        contact();
    }elseif ($_GET['action'] == 'connexion') {
        connexion();
    }
}
else {
    accueil();
}
