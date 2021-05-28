<?php

$bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');

if(isset($_POST['formInscription'])){

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = sha1($_POST['password']);
    $password_retype = sha1($_POST['password_retype']);
    $role=htmlspecialchars($_POST['roleuser']);
     if(!empty($_POST['pseudo'] AND $_POST['email'] AND $_POST['prenom'] AND $_POST['password'] AND $_POST['password_retype'])){

        $pseudolength=strlen($pseudo);

        if($pseudolength <= 255){

            if($password==$password_retype){

                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE email= :email');
                    $requser->execute(array(
                        'email' =>$email
                    
                        ));
                    $userexist=$requser->rowCount();
                 
                 if($userexist>0){

                    $erreur="un compte existe deja avec ce mail.Veuilez vous connecter";
                 }else{ 
                   
                    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdpass,prenom,email,roleuser) VALUES(:pseudo, :mdpass,:prenom,:email, :roleuser)');
$req->execute(array(
	'pseudo' => $pseudo,
	'mdpass' => $password,
    'email' =>$email,
    'prenom' => $prenom,
    'roleuser' => $role

	));


    header('location:landing.php');
                   
                  
  
  
}


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