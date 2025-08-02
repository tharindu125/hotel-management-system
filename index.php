<?php
ob_start();
include 'conetion.php';
$conn = OpenCon();
?>
<?php

$sql  = "SELECT * FROM rn_hotel_details  ORDER BY rn_hotel_name ASC";
$result = $conn->query($sql);
$resultset = array();
while ($row = $result->fetch_assoc()) {
  $resultset[] = $row;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Bhari hotels & Spas</title>



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">

        <a class="navbar-brand" href="#"><img src="pic/pic/12.jpeg" width="60px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hotelsandresorts.php">Hotels & Resorts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallary.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="createAccount.php">Create Account</a>
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
            <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
          </ul>

        </div>
      </div>
    </nav>
  </header>


  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="pic/pic/9.jpg" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-start">

              <h1>Bhari Hotels & Resorts</h1>
              <!-- <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="pic/pic/10.jpg" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bhari Hotels & Resorts.</h1>
              <!-- <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="pic/pic/11.jpg" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Bhari Hotels & Resorts.</h1>
              <!-- <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <form action="index.php" method="POST" name="hotel">
        <div class="row booking-area">


          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" id="hotelId" name="hotelId" required>
                <option>Select Hotel</option>
                <?php foreach ($resultset as $rowData) { ?>
                  <option value="<?php echo $rowData['rn_hotel_id']; ?>"><?php echo $rowData['rn_hotel_name']; ?> </option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">

              <input type="date" id="startDate" name="startDate" class="datepic" required>
            </div>

          </div>
          <div class="col-md-2">
            <div class="form-group">
              <input type="date" id="endDate" name="endDate" class="datepic" required>
            </div>

          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" id="roomCount" name="roomCount" required>
                <option>Select Rooms</option>
                <?php

                for ($i = 1; $i <= 10; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <!-- <button type="submit" class="btn btn-primary">Book Now</button> -->
            <input class="btn btn-primary" type="submit" value="Book Now" />

          </div>
      </form>
    </div>

    <?php if (isset($_GET['no'])) {
    ?>
      <div class="alert alert-danger error" role="alert">
        Rooms Not Avaliable
      </div>

    <?php }



    ?>

    <!-- Three columns of text below the carousel -->
    <div class="row">

    <?php 
    $sqlviewHotel = "SELECT * From rn_hotel_details";
    $result_h = $conn->query($sqlviewHotel);
    while ($row = $result_h->fetch_assoc()) {

    ?>
      <div class="col-lg-4">
       
        <img src="pic/pic/<?php  echo $row["rn_hotel_pic"]; ?>" width="140" height="140" class="bd-placeholder-img rounded-circle">
        <h2><?php  echo $row["rn_hotel_name"]; ?></h2>
        <p><?php  echo $row["rn_hotel_dis"]; ?></p>
        <p><a class="btn btn-secondary" href="#">View details</a></p>
      </div>

      <?php  }?>
      


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Welcome to
          <span class="text-muted">Bhari Resorts &amp; Spas.</span>
        </h2>
        <p class="lead">Discover a glorious world of palm fringed beaches, lush tea plantations, mist capped mountain ranges and the allure of golden sandy private beaches. Scattered in the most scenic and historic locations, providing easy access to breathtaking pleasures of nature, our Sri Lankan Resorts extend outstanding hospitality with a touch of cultural elegance.Luxury Hotels in Sri Lanka.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="pic/pic/14.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Protecting you from <span class="text-muted">COVID -19.</span></h2>
        <p class="lead">The safety and wellbeing of our guests has, and will always be our top priority. We have implemented a series of measures recommended by local medical authorities and travel associations which adhere to stringent standards of hygiene and cleanliness, to safeguard guests and staff members from COVID-19.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="pic/pic/16.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">


      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pic/pic/19.jpg" class="d-block w-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="pic/pic/20.jpg" class="d-block w-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="pic/pic/3.jpg" class="d-block w-50" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <hr class="featurette-divider">
    <form class="d-flex">
      NEWSLETTER
      SUBSCRIPTION
      <input class="form-control me-2" type="text" placeholder="Your email" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Subscribe</button>
    </form>
    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="footer-view">
      <div class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2021–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

      </div>
    </footer>
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<style>
  .welcome-wrapper {
    text-align: center;

  }

  .navbar {
    padding-bottom: 2px;
    padding-top: 2px;
  }

  .navbar-brand img {
    height: 42px;
    width: 100%;
    border-radius: 50%;
  }

  .bg-dark {
    background-color: #6c757d !important;
  }

  .footer-view {
    background: #0009;
    padding-top: 95px;
    padding-bottom: 85px;
    margin-top: 50px;
  }

  .footer-view p {
    color: #fff;
  }

  .float-end a {
    color: #fff !important;
  }

  .float-end a:hover {
    color: #0d6efd;
  }

  .datepic {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;

  }

  .booking-area {
    background: #e3e4e5;
    padding: 40px 10px;
    margin-bottom: 40px;
    box-shadow: 0 2px 0 rgb(0 0 0 / 2%);
  }
</style>


<?php
if (isset($_POST["hotelId"])) {

  $startDate = $_POST["startDate"];
  $hotelId = $_POST["hotelId"];
  $endDate = $_POST["endDate"];
  $roomCount = $_POST["roomCount"];

  

  $sql = "SELECT COUNT(rhbr.rn_hotel_booking_room_final_status) AS Avel FROM rn_hotel_booking_room rhbr WHERE rhbr.ref_rn_hotel_id =5";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if ($row["Avel"] >= $roomCount) {

    $query = array(
      'startDate' => $_POST["startDate"],
      'hotelId' => $_POST["hotelId"],
      'endDate' => $_POST["endDate"],
      'roomCount' => $_POST["roomCount"]
    );

    $query = http_build_query($query);
    header("Location: bookNow.php?$query");
  } else {


    header("refresh:10;url=index.php?no=no");
  }

  $conn->close();
  ob_end_flush();
}
