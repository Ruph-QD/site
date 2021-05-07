
<?php require('../controller/controller.php');


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'accueil':
            accueil();
            break;
        case 'faq':
            faq();
            break;
        case 'contact':
            contact();
            break;
        case 'connexion':
            connexion();
            break;
        case 'propos':
            propos();
            break;
        default:
            accueil();
    }
} else {
    accueil();
}
