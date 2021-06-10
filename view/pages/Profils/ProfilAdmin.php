<?php
session_start();
require('../controller/bdd-connect.php');
if (isset($_GET['id']) and $_GET['id'] > 0) {

    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
} ?>

<head>
    <link rel="stylesheet" href="../style/Profil.css" />
</head>

<body>
    <div class="profil-container">
        <h2 class="titre">Bienvenue <?php echo $userinfo['roleuser'] . " ";
                                    echo $userinfo['pseudo']; ?></h2>
        <div class="main-container">
            <div class="container">
                <?php
                if ($userinfo['photo']) {
                    echo '<img class="pic" src="' . $userinfo['photo'] . '" alt="">';
                } else {
                    if ($userinfo['roleuser']=="coach"){
                        echo '<img class="pic" src="../assets/images/coachh.png">';
                    } else {
                        echo '<img class="pic" src="https://www.jeancoutu.com/globalassets/revamp/photo/conseils-photo/20160302-01-reseaux-sociaux-profil/photo-profil_301783868.jpg" alt="">';
                    }
                }
                /*echo '
                <form name="formPicture" method="post" action="pages/Profils/profilChange.php?id=' . $_SESSION['id'] . '" enctype="multipart/form-data">
                    <label class="label-pic" for="input-pic"><input type="file" name="input-pic" id="input-pic" accept="image/*">Sélectionner</label>
                    <label for="submit"><input type="submit" value="" id="input-submit" name="formPicture"><span class="span span1"></span>
                        <span class="span span2"></span>
                        <span class="span span3"></span>
                        <span class="span span4"></span>
                        Confirmer</label>
                </form>'; */?>
            </div>
            <div class="container2">
                <div class="form_container">
                    <form action="" method="post">
                        <div class="mini-container">
                            <input type="text" name="" id="pseudo" disabled>
                            <label id="label-pseudo"><?php echo $userinfo['pseudo']; ?></label>
                        </div>
                        <div class="mini-container">
                            <input type="text" name="" id="prenom" disabled>
                            <label id="label-prenom"><?php echo $userinfo['prenom']; ?></label>
                        </div>
                        <div class="mini-container">
                            <input type="text" name="" id="email" disabled>
                            <label id="label-email"><?php echo $userinfo['email']; ?></label>
                        </div>
                    </form>
                </div>
                <div class="form_container">
                    <?php echo '
                    <form action="pages/Profils/profilChange.php?id=' . $_SESSION['id'] . '" method="post">
                        <div class="mini-container">
                            <input type="text" name="pseudo" id="pseudo" required>
                            <label id="label-pseudo">Pseudo</label>
                        </div>
                        <div class="mini-container">
                            <input type="text" name="prenom" id="prenom" required>
                            <label id="label-prenom">Prenom</label>
                        </div>
                        <div class="mini-container">
                            <input type="text" name="email" id="email" required>
                            <label id="label-email">Email</label>
                        </div>

                        <input type="submit" name="formUser" class="btn-submit" value="Modifier" />
                    </form>'; ?>
                </div>
            </div>


            <div class="container3"><?php
            if($userinfo['roleuser'] == 'coach'){
                $req = $bdd->prepare('SELECT * FROM  groupe WHERE coach=:coach ');
                $req->bindParam(':coach', $_SESSION['id'], PDO::PARAM_INT);
                $req->execute();
                $groupes = $req->fetchAll();
                echo '<table class="table-groupe">
                    <thead><tr>
                        <th>Coureur</th>
                        <th>Pseudo</th>
                        <th>Statistiques</th>
                    </tr></thead>';

                foreach ($groupes as $groupe) {
                    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
                    $requser->execute(array($groupe['coureur']));
                    $coureur = $requser->fetch();
                    echo '
                        <tr class="tr-coureur">
                            <td>
                                '.$coureur['prenom'].'
                            </td>
                            <td>
                                '.$coureur['pseudo'].'
                            </td>
                            <td>
                                <a href="" class="stats">Statistiques</a>
                            </td>
                        </tr>
                    ';
                }
                echo '</table>';
            } 
            ?>
            <div>
        </div>
    </div>

</body>