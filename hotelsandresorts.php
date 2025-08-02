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
            body {
                 padding-top: unset !important;
            }
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

        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
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



        <div class="container gallery-container">

            <h1>Greenacres Leisure Resort</h1>

            <p class="page-description text-center">Situated in Kandy, 25 km from Kandy Royal Botanic Gardens, GreenAcres Leisure Resort features accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge. The property is around 32 km from Kandy City Center Shopping Mall, 33 km from Sri Dalada Maligawa and 33 km from Kandy Museum. The hotel offers mountain views, a terrace, a 24-hour front desk, and free WiFi is available.</p>

            <div class="tz-gallery">

                <div class="row">

                    <div class="col-sm-12 col-md-4">
                        <a class="lightbox" href="pic/gallary1/1.jpg">
                            <img src="pic/gallary1/1.jpg" alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="pic/gallary1/2.jpg">
                            <img src="pic/gallary1/2.jpg" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="pic/gallary1/3.jpg">
                            <img src="pic/gallary1/3.jpg" alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <a class="lightbox" href="pic/gallary1/4.jpg">
                            <img src="pic/gallary1/4.jpg" alt="Traffic">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="pic/gallary1/5.jpg">
                            <img src="pic/gallary1/5.jpg" alt="Coast">
                        </a>
                    </div>


                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>


        <!-- Three columns of text below the carousel -->



        <!-- FOOTER -->
        <footer class="footer-view">
            <div class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

            </div>
        </footer>
    </main>


    <style>
        body {
            background-color: #434c50;
            min-height: 100vh;
            font: normal 16px sans-serif;
            padding: 40px 0;
        }

        .container.gallery-container {
            background-color: #fff;
            color: #35373a;
            min-height: 100vh;
            padding: 30px 50px;
        }

        .gallery-container h1 {
            text-align: center;
            margin-top: 50px;
            font-family: 'Droid Sans', sans-serif;
            font-weight: bold;
        }

        .gallery-container p.page-description {
            text-align: center;
            margin: 25px auto;
            font-size: 18px;
            color: #999;
        }

        .tz-gallery {
            padding: 40px;
        }

        /* Override bootstrap column paddings */
        .tz-gallery .row > div {
            padding: 2px;
        }

        .tz-gallery .lightbox img {
            width: 100%;
            border-radius: 0;
            position: relative;
        }

        .tz-gallery .lightbox:before {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            opacity: 0;
            color: #fff;
            font-size: 26px;
            font-family: 'Glyphicons Halflings';
            content: '\e003';
            pointer-events: none;
            z-index: 9000;
            transition: 0.4s;
        }


        .tz-gallery .lightbox:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;

            content: '';
            transition: 0.4s;
        }

        .tz-gallery .lightbox:hover:after,
        .tz-gallery .lightbox:hover:before {
            opacity: 1;
        }

        .baguetteBox-button {
            background-color: transparent !important;
        }

        @media(max-width: 768px) {
            body {
                padding: 0;
            }
        }
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

    </body>

    </html>



