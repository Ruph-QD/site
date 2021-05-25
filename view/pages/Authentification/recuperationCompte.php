<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../style/loginstyle.css"/>
        <link rel="stylesheet" href="../style/navbar.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
  <header>
  <?php include("./../../pages/Component/newHeader.php"); ?>
  </header>
    <body>

    <?php
    session_start();
    
$bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');

      if(isset($_POST['formrecuperer'])){

      if(isset($_POST['email'])){

          $email=htmlspecialchars($_POST['email']);
     
          if(!empty($_POST['email']) ){

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                 

                    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE email= :email ');
                    $requser->execute(array(
                        'email' =>$email
                    
                        ));
                    $userexist=$requser->rowCount();
                    if($userexist==1){
                        
                        $userinfo=$requser->fetch();
                        $_SESSION['id']=$userinfo['id'];
                        $_SESSION['pseudo']=$userinfo['pseudo'];
                        $_SESSION['email']=$userinfo['email'];
                        $recup_code=" ";
                        for($i=0;$i<8;$i++){
                          $recup_code.=mt_rand(0,9);
                        }

                        $_SESSION['recup_code']=$recup_code;

                      
                        $recup_insert = $bdd->prepare('INSERT INTO recuperation(code, email) VALUES(:code, :email)');
                        $recup_insert->execute(array(
                            'code' => $recup_code,
                            'email' =>$email
                       
                            ));
                        
                        var_dump($recup_code);
                       
                        

                    }else{
                        $erreur="l email fourni n'existe ne correspondent pas. Veuillez verifier!";
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
          
            <form action="./recuperationCompte.php" method="post">
            <fieldset>
            <h1>Recuperation du mot de passe!</h1>
              <label class="texte " for="ftitle">Email <em>*</em>:</label><br/>
              <input type="email" id="logemail" name="email" placeholder="Email"><br/><br/>
              <input type="submit" name="formrecuperer"/>
              <input type="reset"/><br/><br/>
              <?php
                if(isset($erreur)){
                    echo '<font color="red">'.$erreur.'</font><br/>';
                }
             ?>
            
            </fieldset>
            </form>
            </div>
            <div class="right_aside"></div>
       </div>
    </body>
	
	
</html>

