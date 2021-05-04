<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../style/Template.css" />
        <link rel="stylesheet" href="../../style/Profil.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
    <header>
        <?php include("../Component/Header.php"); ?>
    </header>
    <body>

   
        <div class="profil">
        <div >
        <a href="./../CreationProgramForm.php">creer un programme</a>
    </div>
            <div class="title">
                <h1><?php echo $userinfo['roleuser'] ; echo " "; echo $userinfo['pseudo'];?></h1>
            </div>
            <div class="container">
                <div class="profilPic">
                    <img class="pic" src="https://www.jeancoutu.com/globalassets/revamp/photo/conseils-photo/20160302-01-reseaux-sociaux-profil/photo-profil_301783868.jpg" alt="">
                    <div>
                    <input type="file" name="photo" value="parcourir"/>
                   
                    </div>
                </div>
                <div class="userInformations">
                    <form action="/action_page.php">
                    <label for="nom">
                    <?php echo $userinfo['pseudo'] ;?></label><br>
                   <label for="prenom"> <?php echo $userinfo['prenom'] ; ?></prenom><br>
                   <label for="email"> <?php echo $userinfo['email'] ;?></label>
                   <button class="button" >Editer</button>
                    <div class="listeCoureurs">
                        <button class="coureurs">Coureurs</button>
                        <div class="coureur-content">
                            <a href="#">Coureur 1</a>
                            <a href="#">Coureur 2</a>
                            <a href="#">Coureur 3</a>                              
                            <a href="#">Nouveau coureur</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats">
                <h4>Statistiques des coureurs</h4>
                <p>Observez les statistiques de vos coureurs <a href="">ici</a></p>
            </div>
        </div>
    </body>
	<footer>
        <?php include("./Component/Footer.php"); ?>
    </footer>
	
</html>