<?php
ob_start();
session_start();
include 'conetion.php';
$conn = OpenCon();



$sql  = "SELECT * FROM rn_hotel_details  ORDER BY rn_hotel_name ASC";
$result = $conn->query($sql);
$resultset = array();
while ($row = $result->fetch_assoc()) {
    $resultset[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Employee Information</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
            <?php
              $type= $_SESSION["type"];  $id = $_SESSION["id"];

            $sql = "SELECT rn_name,rn_emp_no FROM rn_employee WHERE rn_emp_id='$id'";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['rn_name']; ?> / <?php echo $row['rn_emp_no'];
                                         ?> Bhari Hotel</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">

                <?php echo $row['rn_name']; ?> / <?php echo $row['rn_emp_no']; ?>
                <a class="nav-link px-3" href="logout.php"> Log out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
           <?php

            if ($type == 0) { //amin

                $booking = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id           
WHERE rl.rn_login_user_type IN ('0')  AND
re.rn_emp_id ='" . $id . "'";
                $resultbooking = mysqli_query($conn, $booking);
                $row_bookings = mysqli_fetch_assoc($resultbooking);
                $check_booking = $row_bookings["OK"];



                $emp = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
                LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id           
                WHERE rl.rn_login_user_type IN ('0')  AND
                re.rn_emp_id ='" . $id . "'";
                $resulemp  = mysqli_query($conn, $emp);
                $row_emp = mysqli_fetch_assoc($resulemp);
                $check_row_emp = $row_emp["OK"];

                $check_cust = 1;
                $check_config = 1;

                $check_report = 1;

                $page = 'dashboard.php';
            } elseif ($type == 1) { //cus



                $booking = "SELECT COUNT(rc.rn_cus_id) AS OK FROM rn_customers rc
LEFT JOIN rn_login rl ON rc.rn_cus_id = rl.rn_login_user_id           
WHERE rl.rn_login_user_type IN ('0')  AND
rn_cus_id ='" . $id . "'";

                $resultbooking = mysqli_query($conn, $booking);
                $row_bookings = mysqli_fetch_assoc($resultbooking);
                $check_booking = $row_bookings["OK"];

                $check_row_emp = 0;
                $check_config = 0;
                $check_cust = 1;
                $check_report = 0;
                $page = 'dashboardCus.php';
                $page3 = '';
                $page2 = '';
            } elseif ($type == 3) { //mgt

                $booking = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
                LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id           
                WHERE rl.rn_login_user_type IN ('3')  AND
                re.rn_emp_id ='" . $id . "'";
                $resultbooking = mysqli_query($conn, $booking);
                $row_bookings = mysqli_fetch_assoc($resultbooking);
                $check_booking = $row_bookings["OK"];


                $emp = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
                LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id           
                WHERE rl.rn_login_user_type IN ('3')  AND
                re.rn_emp_id ='" . $id . "'";

                $resulemp  = mysqli_query($conn, $emp);
                $row_emp = mysqli_fetch_assoc($resulemp);
                $check_row_emp = $row_emp["OK"];

                $check_config = 0;
                $check_cust = 0;
                $check_report = 1;

                $page = 'dashboard.php';
                $page2 = 'dashboardCus.php';
                $page3 = 'dashboardtravel.php';
            } elseif ($type == 4) { //travel

                $page3 = '';
                $page2 = '';
                $page = 'dashboardtravel.php';

                $booking = "SELECT COUNT(rl.rn_login_id) AS OK FROM rn_hotel_travel_comapny rhtc
                LEFT JOIN rn_login rl ON rhtc.rn_hotel_trvel_com_id = rl.rn_login_user_id
      WHERE rl.rn_login_user_type IN ('4')  AND
   rhtc.rn_hotel_trvel_com_id ='" . $id . "'";

                $resultbooking = mysqli_query($conn, $booking);
                $row_bookings = mysqli_fetch_assoc($resultbooking);
                $check_booking = $row_bookings["OK"];
                $check_row_emp = 0;
                $check_config = 0;
                $check_cust = 0;

                $check_report = 0;
            } else { //clark

                $booking = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id           
WHERE rl.rn_login_user_type IN ('5')  AND
re.rn_emp_id ='" . $id . "'";
                $resultbooking = mysqli_query($conn, $booking);
                $row_bookings = mysqli_fetch_assoc($resultbooking);
                $check_booking = $row_bookings["OK"];

                $check_report = 0;
                $check_row_emp = 0;

                $check_config = 1;

                $check_cust = 1;
                $page = 'dashboard.php';
                $page3 = '';
                $page2 = '';
            }

            ?>
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo $page; ?>">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <?php

                        if ($check_row_emp == 1) {
                        ?>

                            <li class="nav-item">
                                <a class="nav-link" href="employee.php">
                                    <span data-feather="shopping-cart"></span>

                                    Employees
                                </a>
                            </li>
                        <?php } ?>
                        <?php



                        if ($check_booking == 1) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="booking.php">
                                    <span data-feather="file"></span>
                                    Booking
                                </a>
                            </li>

                        <?php } ?>

                        <?php if ($check_cust == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="customers.php">
                                    <span data-feather="users"></span>
                                    Customers
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($check_config == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span data-feather="layers"></span>
                                    Configuration
                                </a>

                                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="company.php">Employment</a></li>
                                    <li><a class="dropdown-item" href="employee.php">Employee Information</a></li <li><a class="dropdown-item" href="hotelConfig.php">Hotels & Resorts</a>
                            </li>
                            <li><a class="dropdown-item" href="rooms.php">Rooms</a></li>
                            <li><a class="dropdown-item" href="hotelRoom.php">Rooms Status</a></li>
                            <li><a class="dropdown-item" href="travelCompany.php">Travel Company</a></li>
                    </ul>
                    </li>
                <?php } ?>

                </ul>
                <?php if ($check_report == 1) { ?>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Hotel Occupancy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Occupancy of Future
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Finace Report
                            </a>
                        </li>

                    </ul>
                <?php } ?>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form action="addRoom.php" method="POST" name="hotelRoom" >

                <h2 class="add_new">Add New Room</h2>
                    <label>Name</label><br>
                    <input class="form-control" type="text" name="rName" id="rName" value="" required />
                    <br/>

                    <label> Hotel</label><br>
                    
                    <select class="form-control" name="rhotel" id="rhotel" required>
                        <option value="">Select Hotel</option>
                        <?php foreach ($resultset as $rowData) { ?>
                            <option value="<?php echo $rowData['rn_hotel_id']; ?>"><?php echo $rowData['rn_hotel_name']; ?> </option>
                        <?php } ?>
                    </select>
                    </select>
                    <br />



                    <label>Description</label><br>
                    <textarea class="form-control" id="rDescription" name="rDescription" cols="60" required></textarea>
                    <br />
                    <h6>Hotel</h6>

                    <label>Breakfast</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rBrekHotel" name="rBrekHotel" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />

                    <label>Half Board</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rHBoardHotel" name="rHBoardHotel" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />

                    <label>Full Board</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rFBoardHotel" name="rFBoardHotel" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />


                    <h6>Travel Company</h6>

                    <label>Breakfast</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rBrekHotelTC" name="rBrekHotelTC" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />

                    <label>Half Board</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rHBoardHotelTC" name="rHBoardHotelTC" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />

                    <label>Full Board</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="number" id="rFBoardHotelTC" name="rFBoardHotelTC" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    <br />

                    <label>Room Picture </label><br>
                    <div class="mb-3">

                        <input type="file" name="roomPIC[]" value="" class="form-control" id="customFile" multiple>
                    </div>

                    <br />

                    <div class="row form-row">
                        <?php

                        $sql  = "SELECT * FROM rm_room_facilities  ORDER BY rm_room_facilities_name ASC";
                        $result = $conn->query($sql);
                        $facily = array();
                        while ($row = $result->fetch_assoc()) {
                            $facily[] = $row;
                        }

                        foreach ($facily as $value) {
                        ?>
                            <div class="col-md-2">
                                <div class="but-gruop-wrp mb-30">
                                    <label>

                                        <input class="" class="chb-wight" type="checkbox" id="checked_<?php echo $value['rm_room_facilities_id']; ?>" name="checked_<?php echo $value['rm_room_facilities_id']; ?>">
                                        <span class="check-box"></span>
                                        <span class="pl-5">
                                            <i class="<?php echo  $value['rm_room_facilities_img']; ?>" aria-hidden="true"></i>
                                            <?php echo $value['rm_room_facilities_name']; ?></span>
                                    </label>
                                </div>
                            </div>
                        <?php } ?>

                    </div>



                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="issue" name="issue" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Show Room </label>
                    </div>



                    <?php if (isset($_GET['msg'])) { ?>
                        <div class="alert alert-info" role="alert">
                            <?php echo $_GET['msg']; ?>
                        </div>
                    <?php } ?>

                    <input class="btn btn-success" type="submit" value="Submit" />



                </form>



            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>

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

    .comapny_designation {
        text-align: right;
    }
</style>




<?php


// // Get all the submitted data from the form
// $sql = "INSERT INTO image (filename) VALUES ('$filename')";

// // Execute query
// mysqli_query($db, $sql);

// // Now let's move the uploaded image into the folder: image
// if (move_uploaded_file($tempname, $folder)) {
//     echo "<h3>  Image uploaded successfully!</h3>";
// } else {
//     echo "<h3>  Failed to upload image!</h3>";
// }



if (isset($_POST["rName"])) {
    // var_dump($_FILES['roomPIC']['name']);
    // die();
    $rName = $_POST["rName"];
    $rhotel = $_POST["rhotel"];
    $rDescription = $_POST["rDescription"];
    $rBrekHotel = $_POST["rBrekHotel"];
    $rHBoardHotel = $_POST["rHBoardHotel"];
    $rFBoardHotel = $_POST["rFBoardHotel"];

    $rBrekHotelTC = $_POST["rBrekHotelTC"];
    $rHBoardHotelTC = $_POST["rHBoardHotelTC"];
    $rFBoardHotelTC = $_POST["rFBoardHotelTC"];

    $roomPIC = $_POST["roomPIC"];

    if (!isset($_POST['issue'])) {
        $status = 0;
    } else {
        $status = 1;
    }

    $sql = "INSERT INTO rm_room(ref_rn_hotel_id,rn_room_name,rn_room_discription,rn_room_breakfast,rn_room_halfboard,rn_room_fullboard, rn_room_breakfast_travel_com,rn_room_halfboard_travel_com,rn_room_fullboard_travel_com,ref_rn_hotel_status) 
                             values ('" . $rhotel . "', '" . $rName . "', '" . $rDescription . "', '" . $rBrekHotel . "', '" . $rHBoardHotel . "' , '" . $rFBoardHotel . "', '" . $rBrekHotelTC . "', '" . $rHBoardHotelTC . "', '" . $rFBoardHotelTC . "', '" . $status . "')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;

        foreach ($_POST as $key => $value) {
            $explode = explode('_', $key);
            if ($explode[0] == 'checked') {

                //var_dump($explode[1]);
                $sql_facility = "INSERT INTO rn_asign_room_facilities(ref_rn_room_id,ref_rm_room_facilities_id) 
                values ('" . $last_id . "', '" . $explode[1] . "')";
                $conn->query($sql_facility);
            }
        }
        $allowTypes = array('jpg', 'png', 'jpeg');
        foreach ($roomPIC as  $value) {
            $sql_img = "INSERT INTO rm_room_pic(ref_rn_room_id,rm_room_pic_name) 
                values ('" . $last_id . "', '" . $value . "')";
            $conn->query($sql_img);

            $filename = $value;
            $tempname = $_FILES["roomPIC"]["tmp_name"];
            $folder = "./room/" . $filename;

            if (move_uploaded_file($tempname, $folder)) {
                echo "<h3>  Image uploaded successfully!</h3>";
            } else {
                echo "<h3>  Failed to upload image!</h3>";
            }
        }


        echo "<script> alert('Staff details added successfully');</script>";
         header("Location:rooms.php");
    } else {
        echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }

    $conn->close();
    ob_end_flush();
   
}

?>