var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}

//SHOW PASSWORD
function myFunctionPwd() {
  var x = document.getElementById("myPwd");
  if (x.type === "password") {
    x.type = "password";
  } else {
    x.type = "password";
  }
}


//Script for post feed
var slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1(slideIndex1 += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  var i;
  var slide = document.getElementsByClassName("mySlides-1");
  var dotss = document.getElementsByClassName("dot1");
  if (n > slide.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slide.length}
  for (i = 0; i < slide.length; i++) {
      slide[i].style.display = "none";
  }
  for (i = 0; i < dotss.length; i++) {
      dotss[i].className = dotss[i].className.replace(" active", "");
  }
  slide[slideIndex1-1].style.display = "block";
  dotss[slideIndex1-1].className += " active";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


function openForm1() {
  document.getElementById("myForm-1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm-1").style.display = "none";
}
