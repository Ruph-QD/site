<?php
session_start();
require('../controller/bdd-connect.php');
?>

<head>
    <link rel="stylesheet" href="../style/Users.css" />
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
                <a href="./?page=faq"><i class="fa fa-users" aria-hidden="true"></i> Gérer la FAQ</a>
            </li>
            <li>
                <a href="./?page=user"><i class="fa fa-users" aria-hidden="true"></i> Gérer les utilisateurs</a>
            </li>
        </ul>
    </div>
    <div class="main-container">
        <h2 class="titre">Gestion des utilisateurs</h2>
        <div class="container">
            <h4>Recherche</h4>
            <form action="./?page=user" method="post">
                <span>Pseudo : <input type="text" name="pseudo" size="65" value="" /></span>
                <input type="submit" name="research-pseudo" value="Rechercher" />
            </form>
            <form action="./?page=user" method="post">
                <span>Prenom : <input type="text" name="prenom" size="65" value="" /></span>
                <input type="submit" name="research-prenom" value="Rechercher" />
            </form>
            <form action="./?page=user" method="post">
                <span>Role : <input type="text" name="roleuser" size="65" value="" /></span>
                <input type="submit" name="research-roleuser" value="Rechercher" />
            </form>
        </div>

        <?php
        if ($_POST['pseudo'] or $_POST['prenom'] or $_POST['roleuser']) {
            if ($_POST['research-pseudo']) {
                $req = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo=:pseudo');
                $req->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
                $req->execute();
                $research = $req->fetchAll();
            }
            if ($_POST['research-prenom']) {
                $req = $bdd->prepare('SELECT * FROM utilisateur WHERE prenom=:prenom');
                $req->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $req->execute();
                $research = $req->fetchAll();
            }
            if ($_POST['research-roleuser']) {
                $req = $bdd->prepare('SELECT * FROM utilisateur WHERE roleuser=:roleuser');
                $req->bindParam(':roleuser', $_POST['roleuser'], PDO::PARAM_STR);
                $req->execute();
                $research = $req->fetchAll();
            }
            foreach ($research as $user) {
                echo '
                    <div class="container">
                    <form action="pages/Profils/Gestion/edit.php?id=' . $user['id'] . '" method="post">
                    <span>Pseudo : <input type="text" name="pseudo" size="65" value="' . $user['pseudo'] . '" /></span><br/>
                    <span>Mot de passe : <input type="text" name="mdpass" size="65" value="' . $user['mdpass'] . '" /></span><br/>
                    <span>Email : <input type="text" name="email" size="65" value="' . $user['email'] . '" /></span><br/>
                    <span>Prenom : <input type="text" name="prenom" size="65" value="' . $user['prenom'] . '" /></span><br/>
                    <span>Role : <input type="text" name="roleuser" size="65" value="' . $user['roleuser'] . '" /></span><br/>
                    <input type="submit" name="delete" value="Supprimer" />
                    <input type="submit" name="edit" value="Modifier" />
                    </form></div>
                    ';
            }
        } else {
            $sql = 'SELECT * FROM utilisateur';
            foreach ($bdd->query($sql) as $row) {
                echo '
                    <div class="container">
                    <form action="pages/Profils/Gestion/edit.php?id=' . $row['id'] . '" method="post">
                    <span>Pseudo : <input type="text" name="pseudo" size="65" value="' . $row['pseudo'] . '" /></span><br/>
                    <span>Mot de passe : <input type="text" name="mdpass" size="65" value="' . $row['mdpass'] . '" /></span><br/>
                    <span>Email : <input type="text" name="email" size="65" value="' . $row['email'] . '" /></span><br/>
                    <span>Prenom : <input type="text" name="prenom" size="65" value="' . $row['prenom'] . '" /></span><br/>
                    <span>Role : <input type="text" name="roleuser" size="65" value="' . $row['roleuser'] . '" /></span><br/>
                    <input type="submit" name="delete" value="Supprimer" />
                    <input type="submit" name="edit" value="Modifier" />
                    </form></div>
                    ';
            }
        }
        echo '  
            <div class="container">
            <form action="pages/Profils/Gestion/create.php" method="post">
            Pseudo : <input type="text" name="pseudo" size="65"/> <br/><br/>
            Mot de passe: <input type="text" name="mdpass" size="65"/> <br/><br/>
            Email : <input type="text" name="email" size="65"/> <br/><br/>
            Prenom : <input type="text" name="prenom" size="65"/> <br/><br/>
            Role : <input type="text" name="roleuser" size="65"/> <br/><br/>
            <input type="submit" name="create" value="Ajouter"/>
            </form></div></div>
            ';
        ?>
</body>