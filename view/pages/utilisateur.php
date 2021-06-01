<?php
require('../controller/bdd-connect.php');
session_start();
if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
    $requser->execute(array($_SESSION['id']));
    $userinfo = $requser->fetch();
?>

    <head>
        <link rel="stylesheet" href="../style/Sidebar.css" />
    </head>

    <body>
        <div class="sidebar-container">
            <div class="sidebar-logo">
                Infinite Mesures
            </div>
            <ul class="sidebar-navigation">
                <li class="header">Navigation</li>
                <li>
                    <a href="./"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                </li>
                <li>
                    <a href="./?page=faq"><i class="fa fa-tachometer" aria-hidden="true"></i> FAQ</a>
                </li>
                <li>
                    <a href="./?page=contact"><i class="fa fa-tachometer" aria-hidden="true"></i> Contact</a>
                </li>
                <li>
                    <a href="./?page=propos"> <i class="fa fa-tachometer" aria-hidden="true"></i> A Propos</a>
                </li>
                <li>
                    <a href=<?php echo './?page=utilisateur&id=' . $_SESSION["id"] ?>><i class="fa fa-tachometer" aria-hidden="true"></i> Mon compte</a>
                </li>
                <li>
                    <a href="./?page=deconnexion""><i class=" fa fa-tachometer" aria-hidden="true"></i> Deconnexion</a>
                </li>
                <li class="header">Mes Paramètres </li>
                <?php
                switch ($userinfo['roleuser']) {
                    case 'coach':
                        echo '
                            <li>
                                <a href="./?page=coach"><i class="fa fa-users" aria-hidden="true"></i> Gérer mon équipe</a>
                            </li>
                            <li>
                                <a href="./?page=rechercheCoureur"><i class="fa fa-users" aria-hidden="true"></i> Chercher un coureur</a>
                            </li>
                            ';
                        break;

                    case 'coureur':
                        echo '
                            <li>
                                <a href="./?page=coureur"><i class="fa fa-users" aria-hidden="true"></i> Voir mes coach</a>
                            </li>
                            <li>
                                <a href="./?page=rechercheCoach"><i class="fa fa-users" aria-hidden="true"></i> Chercher un coach</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Réaliser un test</a>
                            </li>
                            ';
                        break;

                    case 'admin':
                        echo '
                            <li>
                                <a href="./?page=faq"><i class="fa fa-users" aria-hidden="true"></i> Gérer la FAQ</a>
                            </li>
                            <li>
                                <a href="./?page=user"><i class="fa fa-users" aria-hidden="true"></i> Gérer les utilisateurs</a>
                            </li>
                            ';
                        break;
                }
                ?>
            </ul>
        </div>
        <?php
        require("./pages/Profils/ProfilAdmin.php");
        ?>

    </body>
<?php
} else {
    header('Location:./');
}
?>