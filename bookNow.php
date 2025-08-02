<?php
ob_start();
include 'conetion.php';
$conn = OpenCon();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Bhari Hotels & Spas</title>

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

                            <h1>BR Hotels & Resorts</h1>
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
                            <h1>BR Hotels & Resorts.</h1>
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
                            <h1>BR Hotels & Resorts.</h1>
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


        <div class="container">
            <div style="margin: auto 200px;">
                <div class="featurette">
                    <div class="col-md-12">
                        <h2 class="featurette-heading" style="margin-bottom: 40px;">Booking</h2>
                    </div>

                </div>
                <div id="addcustomer">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ADULTS & CHILDREN</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">DATES OF STAY</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ACCOMMODATIONS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">TOTAL</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <h4> Guests & Rooms</h4>

                            <form action="bookNow.php" method="POST" name="guests">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row form-row">
                                            <div class="col-md-6 input-layout form-group seleteAge">
                                                <label for="">Adult</label>
                                                <select class="form-control" id="adult" name="adult" required>
                                                    <?php
                                                    for ($i = 1; $i <= 3; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> Adult</option>
                                                    <?php  } ?>
                                                </select>

                                            </div>
                                            <div class="col-md-6 input-layout form-group seleteAge">
                                                <label>Children</span></label>
                                                <select class="form-control widthnew" id="children" name="children">
                                                    <?php
                                                    for ($i = 0; $i <= 4; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> Children </option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="row form-row">
                                            <div class="col-md-6 input-layout form-group">
                                            </div>
                                            <div class="col-md-6 input-layout form-group seleteAge">
                                                <label>Children Age<span>&nbsp;&nbsp;(Age: 6 - 11)</span></label>
                                                <select class="form-control" id="childrenAge" name="childrenAge">
                                                    <?php
                                                    for ($i = 0; $i <= 11; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> years old </option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <input type="hidden" id="startDate" name="startDate" value="<?php echo $_GET["startDate"]; ?>">
                                <input type="hidden" id="hotelId" name="hotelId" value="<?php echo $_GET["hotelId"]; ?>">
                                <input type="hidden" id="endDate" name="endDate" value="<?php echo $_GET["endDate"]; ?>">
                                <input type="hidden" id="roomCount" name="roomCount" value="<?php echo $_GET["roomCount"]; ?>">

                                <input class="btn btn-outline-success" type="submit" value="UPDATE GUESTS & ROOMS" />
                            </form>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">222</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.1111111111111111..</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
                    </div>


                </div><!-- /.container -->

            </div>
        </div>
        <!-- FOOTER -->
        <?php include 'footer.php'; ?>

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

    .width-100 {
        width: 100% !important;
    }

    .seleteAge {

        border: none;
    }
</style>

<?php
if (isset($_POST["adult"])) {
    $query = array(
        'startDate' => $_POST["startDate"],
        'hotelId' => $_POST["hotelId"],
        'endDate' => $_POST["endDate"],
        'roomCount' => $_POST["roomCount"],
        'adult' => $_POST["adult"],
        'children' => $_POST["children"],
        'childrenAge' => $_POST["childrenAge"]
    );
    $query = http_build_query($query);
    header("Location: date.php?$query");

    $conn->close();
    ob_end_flush();
}

?>