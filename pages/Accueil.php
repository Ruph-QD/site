<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../style/Template.css"/>
      <link rel="stylesheet" href="../style/Accueil.css"/>
      <script src="../JavaScript/Accueil.js"></script>
      <meta charset="utf-8" />
      <title>Runnest</title>
    </head>
    <header>
      <?php include("Header.php"); ?>
    </header>
    <body>

      <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="../assets/images/image_runner-1.png">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="../assets/images/image_runner-2.png">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="../assets/images/image_runner-3.png">
        <div class="text">Caption Three</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
		
    </body>
    <footer>
      <?php include("Footer.php"); ?>
    </footer>
	
</html>