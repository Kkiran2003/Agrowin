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


   <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .contact-form {
            background-color: #fff;
            padding: 25px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 30px;
        }
        .contact-form h2 {
            text-align: center;
            color: #2d6a4f;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }
        button {
            background-color: #2d6a4f;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #22543d;
        }
    </style>

</head>
<body>
  
<!-- navbar start -->

<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html" id="logo"><span>A</span>growin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span><i class = "fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">होम </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Agro wishes.php">अग्रो विशेष </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="whether.php">हवामान</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="govrnment.php">सरकारी योजना </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">बातम्या </a>
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


 <div class="maquee">
 <marquee width="100%" direction="left" height="30px">
 शेतीविषयक नवनवीन बातम्या.. शेती विषयक नवनवीन योजना.. शेती विषयी लागणारी सर्व माहिती.. फक्त आपल्या अग्रोविन वरती पहा.
</marquee>
</div>


 <div class="contact-form">
        <h2>आमच्याशी संपर्क करा</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">नाव:</label>
                <input type="text" id="name" name="name" placeholder="तुमचे पूर्ण नाव लिहा" required>
            </div>

            <div class="form-group">
                <label for="email">ईमेल:</label>
                <input type="email" id="email" name="email" placeholder="तुमचा ईमेल लिहा" required>
            </div>

            <div class="form-group">
                <label for="phone">फोन नंबर:</label>
                <input type="tel" id="phone" name="phone" placeholder="तुमचा फोन नंबर लिहा" required>
            </div>

            <div class="form-group">
                <label for="message">संदेश:</label>
                <textarea id="message" name="message" rows="5" placeholder="तुमचा संदेश लिहा..." required></textarea>
            </div>

            <button type="submit">पाठवा</button>
        </form>
    </div>































































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