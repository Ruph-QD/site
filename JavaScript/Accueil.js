let slideIndex = 0;
const slideTime = 5000;
initialize();
let slideInterval = setInterval(() => changeSlide(true), slideTime);

function initialize() {
  const slides = document.getElementsByClassName('slide');
  const dots = document.getElementsByClassName('dot');
  slides[0].style.display = "block";
  dots[0].classList.add("active");
}

function jumpSlide(forward) {
  clearInterval(slideInterval);
  changeSlide(forward)
  slideInterval = setInterval(() => changeSlide(true), slideTime);
}

function currentSlide(index) {
  clearInterval(slideInterval);
  const slides = document.getElementsByClassName('slide');
  const dots = document.getElementsByClassName('dot');
  slides[slideIndex].style.display = "none";
  dots[slideIndex].classList.remove("active");
  slideIndex = index;
  slides[slideIndex].style.display = "block";
  dots[slideIndex].classList.add("active");
  slideInterval = setInterval(() => changeSlide(true), slideTime);
}

function changeSlide(forward) {
  const slides = document.getElementsByClassName('slide');
  const dots = document.getElementsByClassName('dot');
  slides[slideIndex].style.display = "none";
  dots[slideIndex].classList.remove("active");
  if (forward) {
    if (slideIndex + 1 > slides.length - 1) {
      slides[0].style.display = "block";
      dots[0].classList.add("active");
      slideIndex = 0;
    } else {
      slides[slideIndex + 1].style.display = "block";
      dots[slideIndex + 1].classList.add("active");
      slideIndex ++;
    } 
  } else {
    if (slideIndex - 1 < 0) {
      slides[slides.length - 1].style.display = "block";
      dots[dots.length - 1].classList.add("active");
      slideIndex = slides.length - 1;
    } else {
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].classList.add("active");
      slideIndex --;
    }
  }
}