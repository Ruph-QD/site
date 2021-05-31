
    <?php

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

                    $reqalluser=$bdd->query('SELECT * FROM utilisateur');
                    $reponse=$reqalluser->fetch(); 
                    var_dump($reponse);   
                    $userexist=$requser->rowCount();
                    if($userexist==1){
                        
                        $userinfo=$requser->fetch();
                        $_SESSION['id']=$userinfo['id'];
                        $_SESSION['pseudo']=$userinfo['pseudo'];
                        header('Location:./?page=utilisateur&id='.$_SESSION['id']);
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