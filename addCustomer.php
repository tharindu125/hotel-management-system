<?php
ob_start();
session_start();
include 'conetion.php';
$conn = OpenCon();
//echo "Connected Successfully";
//CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
            $type = $_SESSION["type"];
            $id = $_SESSION["id"];
if($type == 0|| $type == 3 ||$type == 5){
            $sql = "SELECT rn_name,rn_emp_no FROM rn_employee WHERE rn_emp_id='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['rn_name']; ?> / <?php echo $row['rn_emp_no'];
}elseif($type == 1){
    $sql = "  SELECT * FROM rn_customers rc WHERE rc.rn_cus_id ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['rn_cus_name']; ?> / <?php echo $row['rn_cus_id'];
}else{
    $sql = "SELECT * FROM rn_hotel_travel_comapny rhtc  WHERE rhtc.rn_hotel_trvel_com_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['rn_hotel_trvel_com_name']; 
}
?>
 RN Hotel</a>
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
WHERE rl.rn_login_user_type IN ('1')  AND
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

                <h2 class="add_new">Add New Customer</h2>

                <form action="addCustomer.php" method="POST" name="cussAdd">
                    <?php
                    $sql_id  = "SELECT count(rn_cus_id) as Full FROM rn_customers ";
                    $result = mysqli_query($conn, $sql_id);
                    $row = mysqli_fetch_assoc($result);
                    $newID = ($row["Full"] + 1);

                    ?>
                    <label>Customer ID</label><br>
                    <input class="form-control" type="text" name="cusstid" id="cusstid" value="Cus_<?php echo $newID ?>" readonly />
                    <br />
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

                    <label>Address</label><br>
                    <textarea class="form-control" id="cussaddress" name="cussaddress" cols="60" required></textarea>
                    <br />

                    <label>Username</label><br>
                    <input type="text" class="form-control" name="cussunm" id="cussunm" value="" />
                    <br />

                    <label>Password</label><br>
                    <input class="form-control" type="password" name="cusspass" id="cusspass" value="" />
                    <br />

                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="issue" name="issue" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Account Issue</label>
                    </div>

                    <?php if (isset($_GET['msg'])) { ?>
                        <div class="alert alert-danger msg" role="alert">
                            Error
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['msgN'])) { ?>
                        <div class="alert alert-danger msg" role="alert">
                            Duplicate NIC
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['suss'])) { ?>
                        <div class="alert alert-success msgOk" role="alert">
                            Data Saved Successfully
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

if (isset($_POST["cusstname"])) {

    $cusstid = $_POST["cusstid"];

    $cusstname = $_POST["cusstname"];
    $cussnic = $_POST["cussnic"];
    $cusstel = $_POST["cusstel"];
    $cussNationality = $_POST["cussNationality"];
    $cussaddress = $_POST["cussaddress"];
    $cussunm = $_POST["cussunm"];
    $cusspass = $_POST["cusspass"];
    if (!isset($_POST['issue'])) {
        $issue = 1;
    } else {
        $issue = 0;
    }
    $check_status  = "SELECT COUNT(rn_cus_id) AS NIC FROM rn_customers WHERE rn_cus_nic ='" . $cussnic . "'";

    $result_nic = mysqli_query($conn, $check_status);
    $row_nic = mysqli_fetch_assoc($result_nic);

    $checkNIC = $row_nic['NIC'];



    if ($checkNIC == '0') {


        $sql = "INSERT INTO rn_customers (rn_cus_new_id,rn_cus_name,rn_cus_nic,rn_cus_nationality,rn_cus_address,rn_cus_tp_no,rn_cus_create) 
                             values ('" . $cusstid . "', '" . $cusstname . "', '" . $cussnic . "', '" . $cussNationality . "', '" . $cussaddress . "' , '" . $cusstel . "', '1')";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $sql_login = "INSERT INTO rn_login (rn_login_user_name,rn_login_user_password,rn_login_user_type, rn_login_status,rn_login_user_id,rn_login_user_issue_account) 
                                values ('" . $cussunm . "', '" . $cusspass . "', '1', '','" . $last_id . "', '" . $issue . "') ";

            if ($conn->query($sql_login) === TRUE) {


                header("refresh:10;url=addCustomer.php?suss=OK");
            } else {
                header("refresh:10;url=addCustomer.php?msg=No");
            }
        } else {
            header("refresh:10;url=addCustomer.php?msg=No");
        }
    } else {

        header("Location: addCustomer.php?msgN=DuplicateNIC");
    }

    $conn->close();
    ob_end_flush();
}

?>