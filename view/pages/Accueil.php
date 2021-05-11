<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style/Template.css" />
  <link rel="stylesheet" href="../style/Accueil.css" />
  <meta charset="utf-8" />
  <title>Runnest</title>
</head>

<body>
  <div class="slideshow-container">

    <a class="prev" onclick="jumpSlide(false)">&#10094;</a>
    
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

    <a class="next" onclick="jumpSlide(true)">&#10095;</a>
  
  </div>
  <br>

  <div class="dots">
    <span class="dot" onclick="currentSlide(0)"></span>
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
  </div>

</body>

<script type="text/javascript" src="../JavaScript/Accueil.js"></script>


</html>