var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex].style.display = "block";

  dots[slideIndex].classList.add("active");

  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  setTimeout(showSlides, 2000); // 2 giây là thời gian trễ
}

showSlides();