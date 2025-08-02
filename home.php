<?php
include 'conetion.php';
$conn = OpenCon();
//echo "Connected Successfully";
CloseCon($conn);
?>
<html>

<head>
  <title> Hotel BR HotelBR.LK
  </title>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="pic/pic/12.jpeg" width="60px" height="50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hotelsandresorts.php">Hotels & Resorts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallary.php">Gallery</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="pic/pic/9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>BR Hotels & Resorts</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="pic/pic/10.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>RN Beach Resort & Spa</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/pic/11.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>RN Beach Resort & Spa</h5>
          <p>Where a distinct identity complements a luxurious escape. Located by the Kandalama Reservoir, Amaya Lake embraces the charms of the Emerald Isle.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="welcome-wrapper">
    <h1>Welcome to RN Resorts &amp; Spas</h1>
    <p>Discover a glorious world of palm fringed beaches, lush tea plantations, mist capped mountain ranges and the allure of golden sandy private beaches. Scattered in the most scenic and historic locations, providing easy access to breathtaking pleasures of nature, our Amaya Sri Lanka Resorts extend outstanding hospitality with a touch of cultural elegance.</p>
    <p style="text-align: center;">Luxury Hotels in Sri Lanka,</p>
    <hr>
    <h2 style="text-align: center;"><strong>Protecting you from COVID -19</strong></h2>
    <p style="text-align: center;">The safety and wellbeing of our guests has, and will always be our top priority. We have implemented a series of measures recommended by local medical authorities and travel associations which adhere to stringent standards of hygiene and cleanliness, to safeguard guests and staff members from COVID-19.</p>
    <!-- <p style="text-align: center;"><a class="button" href="https://www.amayaresorts.com/covid-19-safety-protocol.html">Read More&nbsp;</a></p> -->
    <p>&nbsp;</p><!-- footer-contact-wrapper Removed -->

    <hr>
    <h2>Our Hotels</h2>
<p>Indulge in pure tropical bliss amidst the waves and the balmy coastlines of Sri Lanka; indulge in luxury embellished in colonial charms surrounded by misty mountains, uncover the secrets of epic historic sites during your stay at the heart of the cultural triangle! With exclusive resort establishments situated around the most significant and enticing tour destinations on the island, our hotels offer you an opportunity to have a comprehensive and complete travel experience when you are here in Sri Lanka!</p>
  </div>

  <div class="card-group">
  <div class="card">
    <img src="pic/pic/13.jpg" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">RN Hills</h5>
      <p class="card-text">Embark on a journey of enriching experiences at Amaya Hills where the cool climes of Kandy serve as an ideal backdrop for restful living.</p>
    </div>
    <!-- <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div> -->
  </div>
  <div class="card">
    <img src="pic/pic/1.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">RN Beach Resort & Spa</h5>
      <p class="card-text">Be captivated by the allure & warmth of RN Beach Pasikuda. Discover serene surroundings that lead out to the beautiful shores of Pasikuda Bay.</p>
    </div>
    <!-- <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div> -->
  </div>
  <div class="card">
    <img src="pic/pic/6.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">SR Lake</h5>
      <p class="card-text">Where a distinct identity complements a luxurious escape. Located by the Kandalama Reservoir, SR Lake embraces the charms of the Emerald Isle.</p>
    </div>
    <!-- <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div> -->
  </div>
</div>

</body>
</head>

</html>

<style>
  .welcome-wrapper {
    text-align: center;

  }
</style>