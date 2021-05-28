<!DOCTYPE html>
<html>
    <head>
        <title>Resultats</title>
        
         
          
    </head>

<body>
    <a href=<?php echo "./?page=utilisateur"; ?>>retour</a>
<h2 style="text-align:center;"> <?php echo $_GET['id'] ?></h2>

<div class="stresse">
   <?php require('./pages/stresse.php'); ?> <br/><br/><br/>
   <?php require('./pages/reflexe.php'); ?><br/><br/><br/>
   <?php require('./pages/audition.php'); ?><br/><br/><br/>
</div><br/>
<div class="reflexe">
  
</div>
<div class="audition">
   
</div>		
</body>

</html>