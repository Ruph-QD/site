<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style/Template.css" />
  <link rel="stylesheet" href="../style/Accueil.css" />
  <meta charset="utf-8" />
  <title>Runnest</title>
</head>
<header>
  <?php include("./Component/Header.php"); ?>
</header>

<body>
  <div class="slideshow-container">

    <div class="slide fade">
      <img class="image" src="../assets/images/image_runner-1.png">
      <div class="text"></div>
    </div>

    <div class="slide fade">
      <img class="image" src="../assets/images/image_runner-2.png">
      <div class="text"></div>
    </div>

    <div class="slide fade">
      <img class="image" src="../assets/images/image_runner-3.png">
      <div class="text"></div>
    </div>

    <a class="prev" onclick="jumpSlide(false)">&#10094;</a>
    <a class="next" onclick="jumpSlide(true)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

</body>

<script type="text/javascript" src="../JavaScript/Accueil.js"></script>

<footer>
  <?php include("./Component/Footer.php"); ?>
</footer>

</html>