<?php

session_start();


$username = $_SESSION['username'];

//session



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/ow.png" type="image/gif" sizes="16x16">
  <title>TNAZ</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>T </span>NAZ </h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Bus Route">Bus Route</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About & Contact">About & Contact</a></li>
            <li><a href="myprofile.php" data-after="Welcome  <?php echo htmlspecialchars($username) ?>"><?php echo htmlspecialchars($username) ?>'s Profile </a></li>
            <li><a href="logout.php" data-after="Logout">Logout</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome, <span></span></h1>
        <h1>To <span></span></h1>
        <h1>TNAZ <span></span></h1>
        <a href="booking.php" type="button" class="cta">Now book a bus</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><span>B</span>us<span>R</span>oute</h1>
        <p>This is the Bus Route from ANU from CBA via Google Maps!</p>
      </div>
      <div class="service-bottom">
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d109192.2018857002!2d36.766797222103904!3d-1.322058785967365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x182f1127d18f1367%3A0x5e4945678df7cbba!2sAfrica%20Nazarene%20University%2C%20Magadi%20Rd%2C%20Nairobi%2C%20Kenya!3m2!1d-1.3997804999999999!2d36.788753899999996!4m5!1s0x182f1129e76dad1b%3A0x6dbe599c40794ab1!2sAfrica%20Nazarene%20University%20-%20Nairobi%20Campus%2C%20Nairobi%2C%20Kenya!3m2!1d-1.2877425!2d36.8271841!5e1!3m2!1sen!2sbd!4v1589115109356!5m2!1sen!2sbd"
         width="900" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">My <span>Idea</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
          <h1>Why I invented TNAZ</h1>
            <h2>Goal</h2>
            <p>The reason why I made this system is to
               provide an online environment for staff to book 
               a bus / van to a destination. TNAZ is implemented 
               so that transport and staff can communicate 
               online with each other.</p> </div>
          <div class="project-img">
            <img src="./img/img-1.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>Post-TNAZ?</h1>
            <h2>What's next for me?</h2>
            <p>I have a pending project for online hostel booking and
               other projects i want to work on, 
               I don't want to limit myself.
                I want to get better in other fields</p></div>
          <div class="project-img">
            <img src="../Website/img/img-1.png" alt="img">
          </div>
        
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/William1.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Future Software Engineer / Artificial Intelligence Developer</h2>
        <p>My name is William Lurare born in Saudi Arabia. I'm in my 4th year in ANU. What I like to do is play sports(mostly rugby), like playing
           chess and I like a challenge.</p><a href="ContactMe1.php" class="cta">Contact Me</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->


  

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>T </span>NAZ </h1></div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 William Lurare. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="js/app.js"></script>
</body>
</html>