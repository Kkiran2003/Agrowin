<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agrowin</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css"

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap Link -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   <!-- Font Awesome -->


</head>
<body>
  
<!-- navbar start -->

<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="indexmain.php" id="logo"><span>A</span>growin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span><i class = "fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">होम </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Agro wishes.php">अग्रो विशेष </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fertilizer.php">उर्वरक </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">सरकारी योजना </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="govrnment.php">बातम्या </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">संपर्क </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>


 <!-- navbar End -->


  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-section about">
        <h3>About Us</h3>
        <p>ॲग्रोविन वेबसाईट ही शेती विषयक माहित साठी आहे.</p>
      </div>
      <div class="footer-section links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">होम </a></li>
          <li><a href="#">संपर्क </a></li>
          <li><a href="#">सरकारी योजना </a></li>
          <li><a href="#">बातम्या</a></li>
        </ul>
      </div>
      <div class="footer-section contact">
        <h3>Contact</h3>
        <p>Email: agrowin199@gmail.com</p>
        <p>Phone: +91 9370820155</p>
      </div>
      <div class="footer-section social">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-x-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Agrowin.farma. All rights reserved.</p>
    </div>
  </footer>

 <!-- Home Section End -->


 <script>
    const slider = document.getElementById('cardSlider');
    let scrollAmount = 0;
    const cardWidth = 320; // includes margin

    function slideLeft() {
      scrollAmount -= cardWidth;
      if (scrollAmount < 0) scrollAmount = 0;
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    }

    function slideRight() {
      const maxScroll = slider.scrollWidth - slider.clientWidth;
      scrollAmount += cardWidth;
      if (scrollAmount > maxScroll) scrollAmount = maxScroll;
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    }
  </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>