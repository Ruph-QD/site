<!DOCTYPE html>
<html>
<?php include("./pages/Authentification/connexionTraitement.php"); ?>
    <head>
        <link rel="stylesheet" href="../style/loginstyle.css"/>
        <link rel="stylesheet" href="../../style/newTemplate.css" />

        
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>

    <body>
    
       <div class="main">
           <div class="left_aside"></div>
           <div class="connect">
          
            <form action="" method="post">
            <fieldset>
            <h1>Login</h1>
              <label class="texte " for="ftitle">Email <em>*</em>:</label><br/>
              <input type="email" id="logemail" name="email" placeholder="Email"><br/><br/>
              <label class="texte " for="ftitle">Password <em>*</em>:</label>
              <input type="password" id="logpassword" name="mdpass" placeholder="Password"><br/><br/>
              <input type="submit" name="formConnect"/>
              <input type="reset"/><br/><br/>
              <?php
                if(isset($erreur)){
                    echo '<font color="red">'.$erreur.'</font><br/>';
                }
             ?>
              <a href="recuperationCompte.php">Mot de passe oublié</a><br/><br/>
              <a href="enregistrement.php">Creer un compte!</a>
            </fieldset>
            </form>
            </div>
            <div class="right_aside"></div>
       </div>
    </body>
   
	
</html>

