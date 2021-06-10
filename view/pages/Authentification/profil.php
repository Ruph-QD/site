<!DOCTYPE html>
<html>
    <head>
     
        
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
  
    <body>
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


    ?>
    
    
       <div class="main">
           <div class="left_aside"></div>
           <div class="connect">
          
            
           
             <?php 
             if($userinfo['roleuser']=='coureur'){
                include("./../../pages/Profils/ProfilCoureur.php"); 
             }else{
                 if($userinfo['roleuser']=='admin'){
                    include("./../../pages/Profils/ProfilAdmin.php");  
                 }else{
                     if($userinfo['roleuser']=='coach'){
                        include("./../../pages/utilisateur.php");   
                     }
                 }
             }

            ?> </h1>
             
        
            email=  <?php echo $userinfo['email']; ?>
            
        
        
            </div>
            <div class="right_aside"></div>
       </div>
       <?php
}
?>
    </body>
	
	
</html>


