<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="./../style/coureur.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
   
    <body>
    <h2> <?php echo $userinfo['roleuser'] ; echo " "; echo $userinfo['pseudo'];?><br/>
    <?php echo'<font color="blue">'. $userinfo['email'].'</font><br/>' ;?>
    </h2>
  
    <div class="contenu">
        
        <div class="stats">
        <a href= <?php echo "./?page=ResultatsTest&id=".$_SESSION['id']; ?>><img class="image" src="../assets/images/statistiques.jpg" style="width:250px; height:200px;" /></a>
           
    </div>

        <div class="team">
        </div>

        <div class="recents">
        </div>

    </div>
    
              
            




                   
                  
    </body>
	
</html>