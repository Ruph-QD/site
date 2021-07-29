<?php
session_start();
require('../controller/bdd-connect.php');

$requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
$requser->execute(array($_SESSION['id']));
$coureur = $requser->fetch();
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
                <a href="./?page=test"><i class="fa fa-users" aria-hidden="true"></i> Réaliser un test</a>
            </li>
        </ul>
    </div>

    <div class="profil-container">
        <h3 class="titre">Réalisation de tests</h3>
        <div><?php include("../controller/handle_integration.php"); ?></div>
        <div class="container3">
            <?php
            $req = $bdd->prepare('SELECT * FROM  tests WHERE coureur=:coureur ');
            $req->bindParam(':coureur', $_SESSION['id'], PDO::PARAM_INT);
            $req->execute();
            $tests = $req->fetchAll();
            echo '<table class="table-groupe">
                    <thead><tr>
                        <th>Coureur</th>
                        <th>Action réalisée</th>
                        <th>Date</th>
                    </tr></thead>';

            foreach ($tests as $test) {
                echo '
                        <tr class="tr-coureur">
                            <td>
                                ' . $coureur['pseudo'] . '
                            </td>
                            <td>
                                ' . $test['action'] . '
                            </td>
                            <td>
                                ' . $test['date'] . '
                            </td>
                        </tr>
                    ';
            }
            $_SESSION['lastAction'] = $tests[count($tests) - 1]['action'];
            echo '</table>';
            ?>
            <div>
            </div>
        </div>
        <?php if (!$tests) {
                echo "<br/>Aucunes actions réalisées ";
            } 
        ?>
    </div>

</body>