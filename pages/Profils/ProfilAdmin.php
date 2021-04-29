<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../style/Profil.css" />
        <link rel="stylesheet" href="../../style/navbar.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
    <header>
        <div class="topnav">
            <div class="navigationButton">
                <a class="active" href="#home"><img class="imageLogo"src="../../assets/images/infinite-mesures.png"></a>
                <a href="#news">Forum</a>
                <a href="#contact">FAQ</a>
                <a href="#contact">Contact</a>
                <a href="#about">A Propos</a>
                <a href="/ProfilAdmin.html"><img class="imageLogo" src="../../assets/images/logo_user.png"></a>
            </div>
          </div>
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
	<footer>
        <div class="footer">
            <!-- TODO: mettre les liens pour les pages -->            
            <p><a href="">Conditions Générales d'utilisation</a></p>
            <p>Powered by <a href="">Runnest</a></p>
        </div>
    </footer>
	
</html>