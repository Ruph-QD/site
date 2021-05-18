<?php
 session_start();
 $bdd= new PDO('mysql:host=localhost;dbname=testbdd','root','');
 if(isset($_GET['id']) AND $_GET['id']>0 ){
     
    $getid=intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM  utilisateur WHERE id= ? ');
    $requser->execute(array(
        $getid
    
        ));
    $userinfo = $requser->fetch();
 }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/Template.css" />
    <link rel="stylesheet" href="../style/Faq.css" />
    <meta charset="utf-8" />
    <title>Runnest</title>
</head>


<header>
    <?php include("./Component/Header.php"); ?>
</header>

<body>
    <div class="container-navigation">
  
        <nav class="navigation">
             <?php 
             if($userinfo['roleuser']=='coach'){
                 ?>
              

                <span><img class="image" src="../assets/images/coachh.png"  style="width:25%;height:20%; align:center;">
                    <a href=<?php echo "./../pages/CreationProgramForm.php?id=".$_SESSION['id'] ?> style="color:blue;"><b>Nouveau </b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/entrant.png"  style="width:20%;height:15%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Reçus</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/sortant.png"  style="width:20%;height:20%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Envoyés</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/team.png"  style="width:20%;height:20%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Equipes</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/results.png"  style="width:20%;height:20%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Resultats</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/parametre.png"  style="width:25%;height:20%; align:center;">
                    <a href=<?php echo "./../pages/Profils/ProfilCoach.php?id=".$_SESSION['id'] ?> style="color:blue;"><b>Compte </b></a><br/><br/></span> 
                <?php
             }else{
                 if($userinfo['roleuser']=='coureur'){
                     ?>
                  <span><img class="image" src="../assets/images/nouveau.png"  style="width:25%;height:20%; align:center;">
                    <a href="#question-1" style="color:blue;"><b>Nouveau test</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/entrant.png"  style="width:20%;height:15%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Reçus</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/sortant.png"  style="width:20%;height:20%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>Envoyés</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/termine.png"  style="width:20%;height:20%; align:center;">
                    <a href="#question-1" style=":hover{ font-size:20px;}"><b>effectués</b></a><br/><br/></span> 
                    <span><img class="image" src="../assets/images/parametre.png"  style="width:25%;height:20%; align:center;">
                    <a href=<?php echo "./../pages/Profils/ProfilCoureur.php?id=".$_SESSION['id'] ?> style="color:blue;"><b>Compte </b></a><br/><br/></span> 
 
                    
                    <?php
                 }else{
                     ?>
                     
                    <a href="#question-1">Créer un compte</a><br/><br/><br/><br/>
                    <a href="#question-2">Parametrer les comptes</a><br/><br/><br/>
                    <a href="#question-3">Gerer la FAQ</a><br/><br/><br/><br/>
                    <a href="#question-3">Gerer le forum</a> <br/><br/><br/><br/>
                    <span><img class="image" src="../assets/images/parametre.png"  style="width:25%;height:20%; align:center;">
                    <a href= <?php "./../pages/Profils/ProfilAdmin.php? id=".$_SESSION['id']?> style="color:blue;"><b>Compte </b></a><br/><br/></span> 
                   <?php
                 }
             }
             ?>
           
        </nav>
    </div>

    <div class="main-container">

    <?php
    
       if($userinfo['roleuser']=='coach'){

        include("./../pages/Profils/coach.php");
       }else{
        if($userinfo['roleuser']=='coureur'){
            include("./../pages/Profils/coureur.php");
        }else{
            include("./../pages/Profils/admin.php");
        }
       }
     ?>
    </div>
</body>


<footer>
    <?php include("./Component/Footer.php"); ?>
</footer>

</html>