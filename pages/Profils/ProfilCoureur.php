<?php
 session_start();
 $bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');
 if(isset($_GET['id']) AND $_GET['id']>0 ){
     
    $getid=intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
    $requser->execute(array(
        $getid
    
        ));
    $userinfo = $requser->fetch();
 }

?>
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
        <div class="profilCoureur">
            <div class="title">
                <h1> <?php echo $userinfo['roleuser'] ; echo " "; echo $userinfo['pseudo'];?></h1>
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
                        <button class="coureurs">Coachs</button>
                        <div class="coureur-content">
                            <a href="#">Coach 1</a>
                            <a href="#">Coach 2</a>
                            <a href="#">Coach 3</a>                              
                            <a href="#">Nouveau coach</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tests">
                <h4>Mes tests</h4>
                <div class="mesTests">
                    <div class="faits">
                        <h5>Faits</h5>
                    </div>
                    <div class="avenir">
                        <h5>A venir</h5>
                    </div>
                </div>
            </div>
            <div class="stats">
                <h4>Mes Statistiques</h4>
                <p>Observez vos statistiques <a href="./../ResultatsTest.php">ici</a></p>
                <button class="envoieProfil">Envoyer mon profil à un coach</button>
            </div>
        </div>
    </body>
   
	
</html>