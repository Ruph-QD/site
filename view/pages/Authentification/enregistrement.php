
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="../../style/enregistrement.css"/>
        <link rel="stylesheet" href="../../style/Template.css" />

        <link rel="stylesheet" href="../style/navbar.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
  <header>
  <?php include("./../../pages/Component/Header.php"); ?>
  </header>
    <body>
    
    <?php

$bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');

if(isset($_POST['formInscription'])){

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = sha1($_POST['password']);
    $password_retype = sha1($_POST['password_retype']);
    $role=htmlspecialchars($_POST['roleuser']);
     echo "ok!";
     if(!empty($_POST['pseudo'] AND $_POST['email'] AND $_POST['prenom'] AND $_POST['password'] AND $_POST['password_retype'])){


        echo "ok!";
        $pseudolength=strlen($pseudo);

        if($pseudolength <= 255){

            if($password==$password_retype){

                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                 
                  
                   
                    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdpass,prenom,email,roleuser) VALUES(:pseudo, :mdpass,:prenom,:email, :roleuser)');
$req->execute(array(
	'pseudo' => $pseudo,
	'mdpass' => $password,
    'email' =>$email,
    'prenom' => $prenom,
    'roleuser' => $role

	));


    header('location:landing.php');
                   
                  
  
  
               


                }else{

                    $erreur="votre adresse mail n'est pas valide!";
                }
            }else{

                $erreur="Vos mots de passe ne correspondent pas!";
            }

        }else{

            $erreur="Votre pseudo ne doit pas contenir plus de 255 caractères";
        }
     }else{

        $erreur ="Tous les champs doivent être complétés!";

     }
}

?>
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

