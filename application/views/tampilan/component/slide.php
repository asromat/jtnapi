<style>
* {box-sizing: border-box;}
.mySlides {display: block;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 1px;
  width: 1px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 0.5s;
}

@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads10']?>"></script>
</div>

<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads11']?>"></script>
</div>

<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads12']?>"></script>
</div>
<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads13']?>"></script>
</div>
<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads14']?>"></script>
</div>
<div class="mySlides">
  <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads15']?>"></script>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
</script>

</body>
</html> 
