<?php
ob_start();
session_start();
include 'conetion.php';
$conn = OpenCon();


$id = $_POST["companyId"];
$sqledit = "SELECT * From rn_hotel_travel_comapny where id='" . $id . "'";
$result = $conn->query($sqledit);
while ($row = $result->fetch_assoc()) {
    $TCAcc = $row["rn_hotel_trvel_com_acc_no"];
    $TCName = $row["rn_hotel_trvel_com_name"];
    $TCAddress = $row["rn_hotel_trvel_com_address"];
    $TCTep = $row["rn_hotel_trvel_com_tp"];
    $TCFax = $row["rn_hotel_trvel_com_fax"];
    $TCWAddress = $row["rn_hotel_trvel_com_web_address"];
    $TCbank = $row["rn_hotel_trvel_com_ref_bank_id"];
    $TCstatus = $row["rn_hotel_trvel_com_status"];
}

$sqledituser = "SELECT * From rn_login where rn_login_user_id='" . $id . "'";
$result = $conn->query($sqledituser);

while ($row = $result->fetch_assoc()) {

    $cussunm = $row["rn_login_user_name"];
    $cusspass = $row["rn_login_user_password"];
}

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
              $type= $_SESSION["type"];  $id = $_SESSION["id"];
            $sql = "SELECT rn_name,rn_emp_no FROM rn_employee WHERE rn_emp_id='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['rn_name']; ?> / <?php echo $row['rn_emp_no'];
                                        ?> RN Hotel</a>
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
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <?php

            $sql_id  = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
                 LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id
                 LEFT JOIN rn_designation rd ON rd.rn_desin_id = ref_rn_desin_id
                 LEFT JOIN rn_employment_name ren ON re.ref_rn_e_name_id = ren.rn_e_name_id
                 WHERE rl.rn_login_user_type IN ('0','3') AND
re.rn_emp_id ='" . $id . "'";
            $result = mysqli_query($conn, $sql_id);
            $row = mysqli_fetch_assoc($result);
            $check = $row["OK"];

            if ($check == 1) {
            ?>

              <li class="nav-item">
                <a class="nav-link" href="employee.php">
                  <span data-feather="shopping-cart"></span>

                  Employees
                </a>
              </li>
            <?php } ?>
                        <?php

            $sql_id  = "SELECT COUNT(re.rn_emp_id) AS OK FROM rn_employee re
                 LEFT JOIN rn_login rl ON re.rn_emp_id = rl.rn_login_user_id
                 LEFT JOIN rn_designation rd ON rd.rn_desin_id = ref_rn_desin_id
                 LEFT JOIN rn_employment_name ren ON re.ref_rn_e_name_id = ren.rn_e_name_id
                 WHERE rl.rn_login_user_type IN ('1','5','4') AND
re.rn_emp_id ='" . $id . "'";
            $result = mysqli_query($conn, $sql_id);
            $row = mysqli_fetch_assoc($result);
            $check = $row["OK"];

            if ($check == 1) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">
                  <span data-feather="file"></span>
                  Booking
                </a>
              </li>

            <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>

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
                    </ul>

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
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h2 class="add_new">Add New Travel Company</h2>
                <form action="addTCompany.php" method="POST" name="hotel">


                    <label>Name</label><br>
                    <input class="form-control" type="text" name="TCName" id="TCName" value="<?php echo  $TCName; ?>" required />
                    <br /><br />

                    <label>Address</label><br>
                    <textarea class="form-control" id="TCAddress" value="<?php echo  $TCAddress; ?>" name="TCAddress" cols="60" required></textarea>
                    <br /><br />

                    <label>Telephone</label><br>
                    <input class="form-control" type="number" name="TCTep" id="TCTep" value="<?php echo  $TCTep; ?>" required />
                    <br /><br />

                    <label>Fax No</label><br>
                    <input class="form-control" type="number" name="TCFax" id="TCFax" value="<?php echo  $TCFax; ?>" />
                    <br /><br />

                    <label>Web Address</label><br>
                    <textarea class="form-control" id="TCWAddress" value="<?php echo  $TCWAddress; ?>" name="TCWAddress" cols="60" required></textarea>
                    <br /><br />



                    <label> Bank</label><br>

                    <?php

                    $sql_ename  = "SELECT * FROM rn_bank  ORDER BY rn_bank_name ASC";
                    $result = $conn->query($sql_ename);
                    $resultset = array();
                    while ($row = $result->fetch_assoc()) {
                        $resultset[] = $row;
                    }

                    ?>
                    <select class="form-control" name="TCbank" id="TCbank" required>

                        <option value="">Select Bank</option>
                        <?php foreach ($resultset as $rowData) { ?>
                            <option value="<?php echo $rowData['rn_bank_id']; ?>" <?php if ($TCbank == $rowData['rn_bank_id']) {
                                                                                    ?> selected="selected" <?
                                                                                                        } ?> <?php echo $rowData['rn_bank_name']; ?> </option>
                            <?php } ?>
                    </select>
                    </select>
                    <br />
                    <br />

                    <label>Account No</label><br>
                    <input class="form-control" type="text" name="TCAcc" id="TCAcc" value="<?php echo  $TCAcc; ?>" required />
                    <br /><br />

                    <label>Username</label><br>
                    <input type="text" class="form-control" name="cussunm" id="cussunm" value="<?php echo  $cussunm; ?>" />
                    <br />

                    <label>Password</label><br>
                    <input class="form-control" type="password" name="cusspass" id="cusspass" value="" />
                    <br />
                    <div class="mb-3 form-check form-switch">

                        checked

                        <input class="form-check-input" type="checkbox" id="activeCompany" name="activeCompany" <?php if ($TCstatus == 1) { ?> checked <?php } ?>>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Show Travel Company</label>
                    </div>

                    <?php if (isset($_GET['msg'])) { ?>


                        <div class="alert alert-danger msg" role="alert">
                            Error
                        </div>
                    <?php } ?>





                    <input class="btn btn-success" type="submit" value="Update" />



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

if (isset($_POST["TCName"])) {


    $TCAcc = $_POST["TCAcc"];
    $TCName = $_POST["TCName"];
    $TCAddress = $_POST["TCAddress"];
    $TCTep = $_POST["TCTep"];
    $TCFax = $_POST["TCFax"];
    $TCWAddress = $_POST["TCWAddress"];
    $TCbank = $_POST["TCbank"];


    $cussunm = $_POST["cussunm"];
    $cusspass = $_POST["cusspass"];

    if (!isset($_POST['activeCompany'])) {
        $issue = 0;
    } else {
        $issue = 1;
    }

    $sql = "UPDATE rn_hotel_travel_comapny SET rn_hotel_trvel_com_name ='" . $TCName . "',
     rn_hotel_trvel_com_address='" . $TCAddress . "', 
     rn_hotel_trvel_com_tp='" . $TCTep . "',
     rn_hotel_trvel_com_fax='" . $TCFax . "',
       rn_hotel_trvel_com_acc_no='" . $TCAcc . "',
       rn_hotel_trvel_com_status='" . $_POST['activeCompany'] . "',
       rn_hotel_trvel_com_ref_bank_id='" . $TCbank . "',
        rn_hotel_trvel_com_web_address='" . $TCWAddress . "'  where  rn_hotel_trvel_com_id= '" . $id . "'   ";


    if ($conn->query($sql) === TRUE) {

        $last_id = $id ;

        $sql_login = "UPDATE rn_login SET rn_login_user_name ='" . $cussunm . "',
        rn_login_user_password='" . $cusspass . "', 
        rn_hotel_trvel_com_tp='" . $TCTep . "',
        rn_login_user_issue_account='" . $issue . "'
         where  rn_login_user_id= '" . $id . "'   ";


       
        if ($conn->query($sql_login) === TRUE) {

            header("Location: travelCompany.php?msgOk=save");
        } else {
            header("refresh:20;url=editTCompany.php?msg=No");
        }
    } else {

        header("refresh:20;url=addTCompany.php?msg=No");
    }
    $conn->close();
    ob_end_flush();
}

?>