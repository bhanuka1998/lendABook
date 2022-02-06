<!DOCTYPE html>
<html>
<title>Lend A Book Libraries</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="../libMsLendABook/index.php"  class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="../libMsLendABook/UserLogin.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>LOGIN</p>
  </a>
  <a href="../libMsLendABook/UserRegistration.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>REGISTER</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="../libMsLendABook/index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="../libMsLendABook/UserLogin.php" class="w3-bar-item w3-button" style="width:25% !important">LOGIN</a>
    <a href="../libMsLendABook/UserRegistration.php" class="w3-bar-item w3-button" style="width:25% !important">REGISTER</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Lend A Book Libraries</h1>
    <p>Reading <br> Listing & Learning</p>
    <img src="https://images.pexels.com/photos/1290141/pexels-photo-1290141.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Our Services</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>We lend a book libraries is a small but well established company. We normally prvides book and video lending services for our customers.<br>
       Therefore, we have several packages for customers which comes with handy perks. If you scroll down you can get the information anbout packages. Since you are alredy here why don't you get registered here.
    </p>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Our Packages</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Bronze</li>
          <li class="w3-padding-16">You can borrow 5 books</li>
          <li class="w3-padding-16">You can borrow 5 videos</li>
          <li class="w3-padding-16">Book lending duration 3 weeks</li>
          <li class="w3-padding-16">Video lending duration 5 days</li>
          <li class="w3-padding-16">Book lending charges 50LKR</li>
          <li class="w3-padding-16">Video lending charges 100 LKR</li>
          <li class="w3-padding-16">Overdue charges for one book/ video per day 20LKR per year 1000LKR</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Silver</li>
          <li class="w3-padding-16">You can borrow 5 books</li>
          <li class="w3-padding-16">You can borrow 7 videos</li>
          <li class="w3-padding-16">Book lending duration 4 weeks</li>
          <li class="w3-padding-16">Video lending duration 1 days</li>
          <li class="w3-padding-16">Book lending charges 40LKR</li>
          <li class="w3-padding-16">Video lending charges 80 LKR</li>
          <li class="w3-padding-16">Overdue charges for one book/ video per day 15LKR per year 2000LKR</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>

    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Gold</li>
          <li class="w3-padding-16">You can borrow 7 books</li>
          <li class="w3-padding-16">You can borrow 9 videos</li>
          <li class="w3-padding-16">Book lending duration 4 weeks</li>
          <li class="w3-padding-16">Video lending duration 10 days</li>
          <li class="w3-padding-16">Book lending charges 30LKR</li>
          <li class="w3-padding-16">Video lending charges 60 LKR</li>
          <li class="w3-padding-16">Overdue charges for one book/ video per day 2010LKR per year 3000LKR</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Platinum</li>
          <li class="w3-padding-16">You can borrow 10 books</li>
          <li class="w3-padding-16">You can borrow 10 videos</li>
          <li class="w3-padding-16">Book lending duration 5 weeks</li>
          <li class="w3-padding-16">Video lending duration 10 days</li>
          <li class="w3-padding-16">Book lending charges 20LKR</li>
          <li class="w3-padding-16">Video lending charges 40 LKR</li>
          <li class="w3-padding-16">Overdue charges for one book/ video per day 5LKR per year 5000LKR</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Kandy, Sri Lanka</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +94715822447</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: cb007874@students.apiit.lk</p>
    </div><br>
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green">Bhanuka Vithanage</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
