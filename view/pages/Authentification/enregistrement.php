
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="./../../style/enregistrement.css"/>
        <link rel="stylesheet" href="../../style/newTemplate.css" />

    
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
  <style>
      .main{
    
    background-repeat: no-repeat;
    background-size: cover;
    display: grid;
    grid-template-columns: 2fr 1fr 2fr;
}

.connect{
    margin-top: 10%;
    display: flex;
    
    justify-content: space-between;
    margin-bottom: 30%;
}

em{
    color: red;
}

fieldset{
    background-color: #0070b1;
    padding-left: 15%;
    justify-content: center;
    border-radius: 8px 8px 0px 0px ;
    border-color: 4px solid black;
}

      </style>
    <body>
    <?php include("./pages/Authentification/enregistrementTraitement.php"); ?>
 
       <div class="main">
           <div class="left_aside"></div>
           <div class="connect">
         
            <form action=" " method="post">
            <fieldset>
            <h1>Inscription</h1>
            <?php
            if(isset($erreur)){
                echo '<font color="red">'.$erreur.'</font><br/>';
            }
            ?>
            <label class="texte " for="ftitle">Pseudo <em>*</em>:</label><br/>
              <input type="text" id="logemail" name="pseudo" placeholder="Nom"  value="<?php if(isset($pseudo)){ echo $pseudo;}?>"><br/><br/>
             
              <label class="texte " for="ftitle">Prénom <em>*</em>:</label><br/>
              <input type="text" id="logemail" name="prenom" placeholder="Prenom" value="<?php if(isset($prenom)){ echo $prenom;}?>"><br/><br/>

              <label class="texte " for="ftitle">Email <em>*</em>:</label><br/>
              <input type="email" id="logemail" name="email" placeholder="Email"  value="<?php if(isset($email)){ echo $email;}?>"><br/><br/>
              <label class="texte " for="ftitle">Rôle <em>*</em>:</label><br/>
              <select name='roleuser' value='coach'>
                  <option value='coach'>Coach</option>
                  <option value='coureur'>Coureur</option>
                  <option value='admin'>Admin</option>
              </select><br/><br/>

              <label class="texte " for="ftitle">Password <em>*</em>:</label>
              <input type="password" id="logpassword" name="password" placeholder="Password"><br/><br/>
              <label class="texte " for="ftitle">Confirmer le Password <em>*</em>:</label>
              <input type="password" id="logpassword" name="password_retype" placeholder="Password"><br/><br/>
              <input type="submit" name="formInscription"/>
              <input type="reset"/><br/><br/>
         
              <a href="connexion.php">Vous avez déja un compte</a>
            </fieldset>
            </form>
            </div>
            <div class="right_aside"></div>
       </div>
    </body>
    
	
</html>

