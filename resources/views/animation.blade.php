<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<style>








</style>
</head>
<body>
<header id="header" class="header fixed-top shadow" style=" padding:35px 0 35px 0;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center" >
        <img src="images/logo.png" alt=""  style="width: 80px;height:100px">
        <span style="font-size: 2.4rem">Car Location</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
         
          <li><a class="nav-link scrollto" href="#about" style="font-size: 1.2rem" >Accueil</a></li>
          <li class="dropdown"  ><a href="#"><span style="font-size: 1.2rem">Gamme à Louer</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" style="font-size: 1.2rem" >Drop Down 1</a></li>
              <li class="dropdown" style="font-size: 1.2rem" ><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#" style="font-size: 1.2rem" >Deep Drop Down 1</a></li>
                  <li><a href="#" style="font-size: 1.2rem" >Deep Drop Down 2</a></li>
                  <li><a href="#" style="font-size: 1.2rem" >Deep Drop Down 3</a></li>
                  <li><a href="#" style="font-size: 1.2rem" >Deep Drop Down 4</a></li>
                  <li><a href="#" style="font-size: 1.2rem" >Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#" >Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services" style="font-size: 1.2rem" >Actualités</a></li>
          <li><a class="nav-link scrollto" href="#team" style="font-size: 1.2rem" >Joignez-nous</a></li>
          <li><a class="getstarted scrollto" href="#about">Authent</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> 

    </div>
</header>

<div class="slideshow-container container-fluid p-0" style="margin-top: 120px;">

<div class="mySlides fade p" style="width: 100%">
  <img src="images/foret2.jpg" style="width:100%; height:800px;">
  <div class="text" id="lienslideId">
    <div class="lienslide">
        <a href="#">Je loue</a>
        <a href="#">Après location</a>
        <a href="#">Je contacte</a>
    </div>
  </div>
</div>

<div class="mySlides fade">
  <img src="images/foret1.jpg" style="width:100%;height:800px;">
  <div class="text" id="lienslideId">
    <div class="lienslide">
        <a href="#">Je loue</a>
        <a href="#">Après location</a>
        <a href="#">Je contacte</a>
    </div>
  </div>
</div>

<div class="mySlides fade">
  <img src="images/foret2.jpg" style="width:100%;height:800px;">
  <div class="text" id="lienslideId">
    <div class="lienslide">
        <a href="#">Je loue</a>
        <a href="#">Après location</a>
        <a href="#">Je contacte</a>
    </div>
  </div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
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
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html> 
