<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/newTemplate.css" />
    </head>

<header>
<img  src="../assets/images/banniere.png" style="width:100%; margin-top:0px;">
  <div class="topnav" id="myTopnav">
    <div class="infinity"><a href="#home"><img class="image-logo" src="../assets/images/infinite-mesures.png"></a></div>
    <div  class="nav"><a href="./" class="navigation-element">Forum</a></div>
    <div class="nav"><a href="./?page=contact" >Contact</a></div>
    
    <div class="nav"><a href="./?page=faq">FAQ</a></div>
    <div class="nav"><a href="./?page=propos">A Propos</a></div>
   
    <div class="dropdown">
      <div class="drop"><button onclick="myFunction()" class="dropbtn"><img class="image-logo" src="../assets/images/logo_user.png"></div>
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
       <?php  if(isset($_SESSION['id'])){
         ?>
      <a href="./?page=deconnexion">Deconnexion</a>
<?php
 }else{
?>
      
        <a href="./?page=connexion">Connexion</a>
        <a href="?page=enregistrement">Inscription</a>
        <?php
        }
        ?>
      </div>
    </div> 
  </div>
  <script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>
</header>

</html>

  
