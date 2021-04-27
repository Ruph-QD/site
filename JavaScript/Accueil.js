let slideIndex = 0;
const slideTime = 5000;
initialize();
let slideInterval = setInterval(() => changeSlide(true), slideTime);

function initialize() {
  const slides = document.getElementsByClassName('slide');
  slides[0].style.display = "block";
}

function jumpSlide(forward) {
  clearInterval(slideInterval);
  changeSlide(forward)
  slideInterval = setInterval(() => changeSlide(true), slideTime);
}

function changeSlide(forward) {
  const slides = document.getElementsByClassName('slide');
  slides[slideIndex].style.display = "none";
  if (forward) {
    if (slideIndex + 1 > slides.length - 1) {
      slides[0].style.display = "block";
      slideIndex = 0;
    } else {
      slides[slideIndex + 1].style.display = "block";
      slideIndex ++;
    } 
  } else {
    if (slideIndex - 1 < 0) {
      slides[slides.length - 1].style.display = "block";
      slideIndex = slides.length - 1;
    } else {
      slides[slideIndex - 1].style.display = "block";
      slideIndex --;
    }
  }
}