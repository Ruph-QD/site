<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style/loginstyle.css"/>
        <link rel="stylesheet" href="../style/Template.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>

    <body>

    <?php
    session_start();
    
$bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');

      if(isset($_POST['formConnect'])){

      if(isset($_POST['email']) AND isset($_POST['mdpass'])){

          $email=htmlspecialchars($_POST['email']);
          $mdpass=sha1($_POST['mdpass']);

          

          if(!empty($_POST['email']) AND !empty($_POST['mdpass'])){

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                 

                    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE email= :email AND mdpass= :mdpass');
                    $requser->execute(array(
                        'email' =>$email,
                        'mdpass' => $mdpass
                    
                        ));
                    $userexist=$requser->rowCount();
                    if($userexist==1){
                        
                        $userinfo=$requser->fetch();
                        $_SESSION['id']=$userinfo['id'];
                        $_SESSION['pseudo']=$userinfo['pseudo'];
                        header('Location:profil.php?id='.$_SESSION['id']);
                        $erreur="tout va bien";

                    }else{
                        $erreur="les parametres fournis ne correspondent pas. Veuillez verifier!";
                    }
                    
                }else{
                    $erreur="veuillez entrer un email valide!";
                }

          }else{

            $erreur = "Tous les champs doivent être complétés!";
          }
        
      }
    }

    ?>
    
    
       <div class="main">
           <div class="left_aside"></div>
           <div class="connect">
          
            <form action="./connexion.php" method="post">
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

