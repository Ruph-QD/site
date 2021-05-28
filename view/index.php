
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
        case 'enregistrement':
             enregistrement();
             break;
        case 'utilisateur':
             utilisateur();
                break;
        case 'ResultatsTest':
            statistiques();
                break;
        case 'deconnexion':
            deconnexion();
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
