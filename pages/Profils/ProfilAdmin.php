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
        include("../Component/Header.php"); ?>
    </header>

    <body>
        <div class="profil">
            <div class="title">
                <h1><?php echo $userinfo['roleuser'] ; echo " "; echo $userinfo['pseudo'];?></h1>
            </div>
            <div class="container">
                <div class="profilPic">
                    <img class="pic" src="https://www.jeancoutu.com/globalassets/revamp/photo/conseils-photo/20160302-01-reseaux-sociaux-profil/photo-profil_301783868.jpg" alt="">
                    <div>
                    <input type="file" value="importer" name="photo"/>
                    
                    </div>
                </div>
                <div class="userInformations">
                    <form action="/action_page.php">
                     
                    <label for="nom">
                    <?php echo $userinfo['pseudo'] ;?></label><br>
                   <label for="prenom"> <?php echo $userinfo['prenom'] ; ?></prenom><br>
                   <label for="email"> <?php echo $userinfo['email'] ;?></label>
                   <button class="button" >Editer</button>
                   
                </div>
            </div>
        </div>
    </body>

	
</html>