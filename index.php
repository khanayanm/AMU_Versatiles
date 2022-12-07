<?php
session_start();
$boolLoggedIn = false;
$sessionUsername = "";

if (isset($_SESSION) and isset($_SESSION["loggedin"]) and isset($_SESSION["username"])) {
  $loggedIn = $_SESSION["loggedin"];
  if ($loggedIn) {
    $boolLoggedIn = true;
    $sessionUsername = $_SESSION["username"];
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> AMU VERSATILES </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
  <nav id="navbar">
    <div id="logo">
      <!-- <img src="logo.png" alt="MyOnlineMeal.com"> -->
      <b>AMU VERSATILES</b>
    </div>
    <ul>
      <li class="item"><a href="./signin.php">Sign In</a></li>
      <li class="item"><a href="./signup.php">Sign Up</a></li>
      <li class="item"><a href="./admin/index.php">Admin Login</a></li>
    </ul>
  </nav>


  <div class="slideshow-container">

    <div class="mySlides fade">
      <!-- <div class="numbertext">1 / 5</div> -->
      <img src="./image/slider_image1.jpg" style="width:100%; height:700px ">
      <div class="text">Bab-E-Syed</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">2 / 5</div> -->
      <img src="./image/slider_image7.jpg" style="width:100%;height:600px ">
      <div class="text">Centenary Gate</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">3 / 5</div> -->
      <img src="./image/slider_image3.jpg" style="width:100%">
      <div class="text">Victoria Gate</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">4 / 5</div> -->
      <img src="./image/slider_image4.jpg" style="width:100%">
      <div class="text">Kennedy Auditorium</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">5 / 5</div> -->
      <img src="./image/slider_image5.jpg" style="width:100%">
      <div class="text">Arts Faculty</div>
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>



  <section id="services-container">
    <h1 class="h-primary center">PLATFORM FOR ALL</h1>
    <div id="services">
      <div class="box">
        <img src="./image/cultural_activities.png" alt="">
        <h2 class="h-secondary center">Cultural Activities</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
          sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
          voluptas beatae facilis labore, omnis sint quae eum.</p>
      </div>
      <div class="box">
        <img src="./image/literary_activities.png" alt="">
        <h2 class="h-secondary center">Literary Activities</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

          sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
          voluptas beatae facilis labore, omnis sint quae eum.</p>
      </div>
      <div class="box">
        <img src="./image/tech_savvy.jpeg" alt="">
        <h2 class="h-secondary center">Tech Savvy</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
          sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
          voluptas beatae facilis labore, omnis sint quae eum.</p>
      </div>
    </div>
  </section>

  <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
      <form action="./contact_us.php" method="post">
        <div class="form-group">
          <label for="name">Name: </label>
          <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email" name="email" id="email" placeholder="Enter your E-mail" required>
        </div>
        <div class="form-group">
          <label for="phone_no">Phone Number: </label>
          <input type="phone" name="phone_no" id="phone_no" placeholder="Enter your Phone">
        </div>
        <div class="form-group">
          <label for="message">Message: </label>
          <textarea name="message" id="message" cols="20" rows="10" placeholder="Type Your Message Here"></textarea>
        </div>
        <button type="submit" class="btn1"> Submit </button>
      </form>
    </div>
  </section>

  <footer>
    <div class="center">
      Copyright &copy; www.AMUversatiles.com All rights reserved!
    </div>
  </footer>

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
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
  </script>


</body>

</html>