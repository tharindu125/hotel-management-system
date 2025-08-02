<?php
ob_start();
include 'conetion.php';
$conn = OpenCon();



$room  = "SELECT * FROM rm_room rr
WHERE rr.rn_room_id ='" . $_GET["room_id"] . "'  AND rr.ref_rn_hotel_id = '" . $_GET["hotelId"] . "' 
";

$result = mysqli_query($conn, $room);
$row = mysqli_fetch_assoc($result);



if ($_GET["deal"] == '1') {
    $deel = "Breakfast Included";
    $price = $row['rn_room_breakfast'];
} elseif ($_GET["deal"] == '2') {
    $deel = "Half Board";
    $price = $row['rn_room_halfboard'];
} else {
    $deel = "Full Board";
    $price = $row['rn_room_fullboard'];
}



$date1 = $_GET["startDate"];
$date2 =  $_GET["endDate"];

function dateDiff($date1, $date2)
{
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
}

$dateDiff = dateDiff($date1, $date2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BR Hotels & Spas</title>



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
                            <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ADULTS & CHILDREN</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">DATES OF STAY</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ACCOMMODATIONS</a>
                            <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">TOTAL</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                            <form action="bookingCus.php" method="POST" name="guests">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <h5> Your Reservation </h5>

                                            </br>

                                            <p>
                                                <?php echo $_GET["startDate"]; ?> - <?php echo $_GET["endDate"]; ?>
                                            </p>
                                            <p>
                                                Deal: <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                <?php echo $deel; ?>
                                            </p>


                                            <p>
                                                <?php echo $row["rn_room_name"]; ?> - <?php echo $_GET["roomCount"]; ?> Room
                                            </p>
                                            <p>
                                                <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $dateDiff; ?> - <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_GET["adult"]; ?> Room
                                            </p>
                                            <p>
                                                Subtotal - LKR <?php echo ($price * $_GET["roomCount"]); ?>
                                            </p>
                                            <p>
                                            <h6> Included in the Rate </h6>
                                            VAT & Service Charge - LKR
                                            <?php echo $row["ref_rn_hotel_vat"]; ?>

                                            </p>

                                            <b>
                                                Totel - LKR <?php echo (($price * $_GET["roomCount"]) + $row["ref_rn_hotel_vat"]); ?>
                                            </b>

                                            <input type="hidden" id="totel" name="totel" value="<?php echo (($price * $_GET["roomCount"]) + $row["ref_rn_hotel_vat"]); ?>">




                                        </div>
                                        <div class="col">
                                            <h5> Guest Information </h5>
                                            <label>Name</label><br>
                                            <input class="form-control" type="text" name="cusstname" id="cussname" value="" required />
                                            <br />
                                            <label> NIC </label><br>
                                            <input class="form-control" type="text" name="cussnic" id="cussnic" value="" required />
                                            <br />
                                            <label> Telephone No</label><br>
                                            <input class="form-control" type="number" name="cusstel" id="cusstel" value="" required />
                                            <br />
                                            <?php

                                            $sql_nas  = "SELECT * FROM rn_nationality   ORDER BY nat_id ASC";
                                            $result = $conn->query($sql_nas);
                                            $resultset = array();
                                            while ($row = $result->fetch_assoc()) {
                                                $resultset[] = $row;
                                            }

                                            ?>

                                            <label> Nationality</label><br>
                                            <select class="form-control" name="cussNationality" id="cussNationality" required>
                                                <option value="">Select Nationality</option>
                                                <?php foreach ($resultset as $rowData) { ?>
                                                    <option value="<?php echo $rowData['nat_id']; ?>"><?php echo $rowData['nationality']; ?> </option>
                                                <?php } ?>
                                            </select>
                                            </select>
                                            <br />

                                        </div>
                                        <div class="col">
                                            <h5> Payment Method</h5>
                                            <i class="fa fa-credit-card-alt fa-2x" aria-hidden="true"></i>


                                            <div class="mb-3 form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="pay" name="pay" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Pay Now OR Later</label>
                                            </div>

                                            <label>Name On Card</label><br>
                                            <input class="form-control" type="text" name="cardN" id="cardN" value="" />
                                            <br />
                                            <label> Card No </label><br>
                                            <input class="form-control" type="text" name="CardNo" id="CardNo" value="" />
                                            <br />
                                            <label> YY/MM</label><br>
                                            <input class="form-control" type="text" name="ym" id="ym" value="" />

                                            <p style="color:red"> Please enter an expiration date. (MM/YY)</p>
                                            <br />
                                            <?php if (isset($_GET['msg'])) { ?>
                                                <div class="alert alert-secondary" role="alert">
                                                    <p class="msg" style="color:red"><?php echo $_GET['msg']; ?></p>
                                                </div>
                                            <?php } ?>
                                            <input class="btn btn-outline-success" type="submit" value="Booking" />
                                        </div>
                                    </div>
                                </div>

                                <p style="color:red"> <b> If you are not a registered customer, Please use Name as the User name and NIC as the Password.<b></p>
                                <input type="hidden" id="deal" name="deal" value="<?php echo $_GET["deal"]; ?>">
                                <input type="hidden" id="startDate" name="startDate" value="<?php echo $_GET["startDate"]; ?>">
                                <input type="hidden" id="endDate" name="endDate" value="<?php echo $_GET["endDate"]; ?>">
                                <input type="hidden" id="adult" name="adult" value="<?php echo $_GET["adult"]; ?>">
                                <input type="hidden" id="hotelId" name="hotelId" value="<?php echo $_GET["hotelId"]; ?>">
                                <input type="hidden" id="children" name="children" value="<?php echo $_GET["children"]; ?>">
                                <input type="hidden" id="roomCount" name="roomCount" value="<?php echo $_GET["roomCount"]; ?>">
                                <input type="hidden" id="childrenAge" name="childrenAge" value="<?php echo $_GET["childrenAge"]; ?>">
                                <input type="hidden" id="roomid" name="roomid" value="<?php echo $_GET["room_id"]; ?>">

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

    .form-control {
        width: 103%;
    }
</style>

<?php

if (isset($_POST["cusstname"])) {
    $query = array(
        'room_id' => $_POST["roomid"],
        'startDate' => $_POST["startDate"],
        'hotelId' => $_POST["hotelId"],
        'endDate' => $_POST["endDate"],
        'roomCount' => $_POST["roomCount"],
        'adult' => $_POST["adult"],
        'children' => $_POST["children"],
        'childrenAge' => $_POST["childrenAge"],
        'deal' => $_POST["deal"],

    );


    $cusstid = $_POST["cusstid"];

    $cusstname = $_POST["cusstname"];
    $cussnic = $_POST["cussnic"];
    $cusstel = $_POST["cusstel"];
    $cussNationality = $_POST["cussNationality"];
    $cussaddress = $_POST["cussaddress"];




    //check nic count
    $checkOLDCus = "SELECT count(rn_cus_nic) AS NICCHECK  FROM rn_customers WHERE rn_cus_nic ='" . $cussnic . "' ";

    $result = mysqli_query($conn, $checkOLDCus);
    $row = mysqli_fetch_assoc($result);
    $checkNIC = $row["NICCHECK"];


    $room_id = $_POST["roomid"];
    $startDate = $_POST["startDate"];
    $hotelId = $_POST["hotelId"];
    $endDate = $_POST["endDate"];
    $roomCount = $_POST["roomCount"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $childrenAge = $_POST["childrenAge"];
    $deal = $_POST["deal"];
    $cussunm = $_POST["cussunm"];
    $cusspass = $_POST["cusspass"];

    $cardN = $_POST["cardN"];
    $CardNo = $_POST["CardNo"];
    $ym = $_POST["ym"];
    if (!isset($_POST['pay'])) {
        $pay = 1;
    } else {
        $pay = 0;
    }


    //old customer 

    if ($checkNIC == 1) {

        $checkOLDCus = "SELECT rn_cus_id FROM rn_customers WHERE rn_cus_nic ='" . $cussnic . "' ";

        $result = mysqli_query($conn, $checkOLDCus);
        $row = mysqli_fetch_assoc($result);
        $cus_id = $row["rn_cus_id"]; // get customer id 


        $sql = "INSERT INTO rn_booking (ref_rn_emp_id,
                room_count,
                rn_room_type,
                ref_rn_hotel_id,
                rn_booking_date_from,
                rn_booking_date_to,
                rn_booking_status,
                rn_booking_cus_card_name,
                rn_booking_cus_card_no,
                rn_booking_cus_card_yy_mm,
                rn_room_pay_status,
                rn_booking_adult,
                rn_booking_children,
                rn_booking_children_age,rn_booking_deail) 
                                 values ('" . $cus_id . "', '" . $roomCount . "',
                                  '" . $room_id . "', '" . $hotelId . "', '" . $startDate . "', '" . $endDate . "' ,
                                   '1', '" . $cardN . "', '" . $CardNo . "','" . $ym . "','" . $pay . "',
                                   '" . $adult . "','" . $children . "','" . $childrenAge . "','" . $deal . "')";

        if ($conn->query($sql) === TRUE) {

            header("Location: admin.php");
        }
    } else {

        //new customer

        $sql_id  = "SELECT count(rn_cus_id) as Full FROM rn_customers ";
        $result = mysqli_query($conn, $sql_id);
        $row = mysqli_fetch_assoc($result);
        $newID = "Cus_" . ($row["Full"] + 1);



        $sql_newCus = "INSERT INTO rn_customers (rn_cus_new_id,rn_cus_name,rn_cus_nic,rn_cus_nationality,rn_cus_address,rn_cus_tp_no,rn_cus_create) 
                        values ('" . $newID . "', '" . $cusstname . "', '" . $cussnic . "', '" . $cussNationality . "', '-' , '0', '0')";


        if ($conn->query($sql_newCus) === TRUE) {

            $last_id = $conn->insert_id;

            $sql_login = "INSERT INTO rn_login (rn_login_user_name,rn_login_user_password,rn_login_user_type, rn_login_status,rn_login_user_id,rn_login_user_issue_account) 
                                    values ('" . $cusstname . "', '" . $cussnic . "', '1', '','" . $last_id . "', '0') ";
            if ($conn->query($sql_login) === TRUE) {

                $cus_id_new = $conn->insert_id;
                $sql = "INSERT INTO rn_booking (ref_rn_emp_id,
        room_count,
        rn_room_type,
        ref_rn_hotel_id,
        rn_booking_date_from,
        rn_booking_date_to,
        rn_booking_status,
        rn_booking_cus_card_name,
        rn_booking_cus_card_no,
        rn_booking_cus_card_yy_mm,
        rn_room_pay_status,
        rn_booking_adult,
        rn_booking_children,
        rn_booking_children_age,rn_booking_deail) 
                         values ('" . $cus_id_new . "', '" . $roomCount . "',
                          '" . $room_id . "', '" . $hotelId . "', '" . $startDate . "', '" . $endDate . "' ,
                           '1', '" . $cardN . "', '" . $CardNo . "','" . $ym . "','" . $pay . "',
                           '" . $adult . "','" . $children . "','" . $childrenAge . "','" . $deal . "')";

                if ($conn->query($sql) === TRUE) {

                    header("Location: admin.php");
                }
            }
        }
    }


    $conn->close();
    ob_end_flush();
}

?>