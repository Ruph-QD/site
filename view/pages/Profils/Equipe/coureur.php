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
                <a href="./?page=coureur"><i class="fa fa-users" aria-hidden="true"></i> Voir mes coach</a>
            </li>
            <li>
                <a href="./?page=rechercheCoach"><i class="fa fa-users" aria-hidden="true"></i> Chercher un coach</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Réaliser un test</a>
            </li>
        </ul>
    </div>
    <div class="profil-container">
        <h3 class="titre">Mes coach</h3>
        <div class="container3">
            <?php
            $req = $bdd->prepare('SELECT * FROM  groupe WHERE coureur=:coureur ');
            $req->bindParam(':coureur', $_SESSION['id'], PDO::PARAM_INT);
            $req->execute();
            $groupes = $req->fetchAll();
            echo '<table class="table-groupe">
                    <thead><tr>
                        <th>Coach</th>
                        <th>Pseudo</th>
                        <th></th>
                    </tr></thead>';

            foreach ($groupes as $groupe) {
                $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
                $requser->execute(array($groupe['coach']));
                $coach = $requser->fetch();
                echo '
                        <tr class="tr-coureur">
                            <td>
                                ' . $coach['prenom'] . '
                            </td>
                            <td>
                                ' . $coach['pseudo'] . '
                            </td>
                            <td>
                            <form action="pages/Profils/Equipe/delete.php?id=' . $groupe['id'] . '" method="post">
                                <input type="submit" name="formDeleteCoureur" class="btn-submit" value="Supprimer" />
                            </form>
                            </td>
                        </tr>
                    ';
            }
            if (!$groupes) {
                echo "Vous n'avez pas de Coach pour le moment";
            }
            echo '</table>';
            ?>
            <div>
            </div>
        </div>
    </div>

</body>