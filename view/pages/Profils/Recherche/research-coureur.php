<?php
session_start();
require('../controller/bdd-connect.php');
?>

<head>
    <link rel="stylesheet" href="../style/Profil.css" />
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
            <li>
                <a href="./?page=coach"><i class="fa fa-users" aria-hidden="true"></i> Gérer mon équipe</a>
            </li>
            <li>
                <a href="./?page=rechercheCoureur"><i class="fa fa-users" aria-hidden="true"></i> Chercher un coureur</a>
            </li>
        </ul>
    </div>
    <div class="profil-container">
        <h3 class="titre">Rechercher un coureur</h3>
        <div class="container4">
            <div>
                <h4 class=titre2>Recherche</h4>
            </div>
            <div>
                <form action="./?page=rechercheCoureur" method="post">
                    <span>Pseudo : <input type="text" name="pseudo" size="65" value="" /></span>
                    <input type="submit" name="research-pseudo" value="Rechercher" />
                </form>
            </div>
            <div>
                <form action="./?page=rechercheCoureur" method="post">
                    <span>Prenom : <input type="text" name="prenom" size="65" value="" /></span>
                    <input type="submit" name="research-prenom" value="Rechercher" />
                </form>
            </div>
        </div>
        <div class="container3">
            <?php
            $role = 'coureur';
            if ($_POST['pseudo'] or $_POST['prenom']) {
                if ($_POST['research-pseudo']) {
                    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE roleuser=:roleuser AND pseudo=:pseudo');
                    $req->bindParam(':roleuser', $role, PDO::PARAM_STR);
                    $req->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
                    $req->execute();
                    $coureurs = $req->fetchAll();
                }
                if ($_POST['research-prenom']) {
                    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE roleuser=:roleuser AND prenom=:prenom');
                    $req->bindParam(':roleuser', $role, PDO::PARAM_STR);
                    $req->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                    $req->execute();
                    $coureurs = $req->fetchAll();
                }
            } else {
                $req = $bdd->prepare('SELECT * FROM  utilisateur WHERE roleuser=:roleuser ');
                $req->bindParam(':roleuser', $role, PDO::PARAM_STR);
                $req->execute();
                $coureurs = $req->fetchAll();
            }
            echo '<table class="table-groupe">
                    <thead><tr>
                        <th>Coureur</th>
                        <th>Pseudo</th>
                        <th></th>
                    </tr></thead>';


            $req = $bdd->prepare('SELECT * FROM  groupe WHERE coach=:coach ');
            $req->bindParam(':coach', $_SESSION['id'], PDO::PARAM_INT);
            $req->execute();
            $groupes = $req->fetchAll();


            foreach ($coureurs as $coureur) {
                $valid = "true";
                foreach ($groupes as $groupe) {
                    if ($groupe['coureur'] == $coureur['id']) {
                        $valid = "false";
                    }
                }
                if ($valid == "false") {
                    continue;
                }
                echo '
                        <tr class="tr-coureur">
                            <td>
                                ' . $coureur['prenom'] . '
                            </td>
                            <td>
                                ' . $coureur['pseudo'] . '
                            </td>
                            <td>
                                <form action="pages/Profils/Recherche/add.php?coureur=' . $coureur['id'] . '&coach=' . $_SESSION['id'] . '" method="post">
                                    <input type="submit" name="formCoureur" class="btn-submit" value="Ajouter" />
                                </form>
                            </td>
                        </tr>
                    ';
            }
            echo '</table>';
            ?>
            <div>
            </div>
        </div>
    </div>

</body>