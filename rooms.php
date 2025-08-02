<?php

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
    <title>Room Information</title>

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
                        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li> -->
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
                        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li> -->
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Rooms</h1>
                </div>
                <a class="btn" href="addRoom.php"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> Add New Room</a>
                <div class="table-responsive">
                    <table class="table table-striped table-sm ">
                        <thead>
                            <tr>
                                <th scope="col" rowspan="2">#</th>
                                <th scope="col" rowspan="2">Name</th>
                                <th scope="col" rowspan="2">Hotel</th>
                                <th scope="col" rowspan="2">Description</th>
                                <th scope="col" rowspan="2">Status</th>
                                <th scope="col" class="text-center" colspan="3">Hotel</th>
                                <th scope="col" class="text-center" colspan="3">Travel Company</th>
                                <th scope="col" rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th class="border-left">Breakfast</th>
                                <th class="border-left border-right">Half Board</th>
                                <th class="border-left border-right">Full Board</th>
                                <th class="border-left">Breakfast</th>
                                <th class="border-left border-right">Half Board</th>
                                <th class="border-left border-right">Full Board</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql  = "SELECT * FROM rm_room rr 
                            LEFT JOIN rn_hotel_details rhd ON rhd.rn_hotel_id = rr.ref_rn_hotel_id 
                            WHERE rr.ref_rn_hotel_status = 1 ORDER BY rr.rn_room_name";
                            $result = $conn->query($sql);
                            $resultset = array();
                            while ($row = $result->fetch_assoc()) {
                                $resultset[] = $row;
                            }
                            $i = 1;
                            foreach ($resultset as $rowData) {
                                $room_id =  $rowData['rn_room_id'];

                                if ($rowData["rn_hotel_status"] == 1) {
                                    $isse = "Show";
                                } else {
                                    $isse = "Hidden";
                                }
                            ?>
                                <tr>
                                    <td><?php echo $i;
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_name"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_hotel_name"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_discription"];
                                        ?></td>
                                    <td><?php echo $isse;
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_breakfast"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_halfboard"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_fullboard"];
                                        ?></td>

                                    <td><?php echo $rowData["rn_room_breakfast_travel_com"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_halfboard_travel_com"];
                                        ?></td>
                                    <td><?php echo $rowData["rn_room_fullboard_travel_com"];
                                        ?></td>


                                    <td>
                                        <button class='btn' myid='". $rowData[' rn_room_id']."' onclick='roomUpdate(" . $room_id . ");'><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button>
                                        <button class='btn' onclick='roomDelete(" . $room_id . ");'><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
        </div>






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

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function staffUpdate(empid) {
        window.location.href = 'addStaffPage.php?staffid=' + empid;
    }



    function staffDelete(staffid) {
        $.post('deleteStaffPage.php', {
            'staffid': staffid
        }, function(result) {
            alert(result);
        });



        location.reload();
    }
</script>


?>