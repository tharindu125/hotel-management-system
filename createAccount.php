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
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <img src="pic/pic/9.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption text-start">

                            <h1>BR Hotels & Resorts</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <img src="pic/pic/10.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>BR Hotels & Resorts.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                    <img src="pic/pic/11.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>BR Hotels & Resorts.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
                        <h2 class="featurette-heading" style="margin-bottom: 40px;">Create Account</h2>
                    </div>

                </div>
                <div id="addcustomer">

                    <form action="createAccount.php" method="POST" name="cussAdd">
                        <div class="row">
                            <div class="col-md-12">


                                <?php
                                $sql_id  = "SELECT count(rn_cus_id) as Full FROM rn_customers ";
                                $result = mysqli_query($conn, $sql_id);
                                $row = mysqli_fetch_assoc($result);
                                $newID = ($row["Full"] + 1);

                                ?>
                                <label>Customer ID</label><br>
                                <input class="form-control width-100" type="text" name="cusstid" id="cusstid" value="Cus_<?php echo $newID ?>" readonly />
                                <br />
                                <label>Name</label><br>
                                <input class="form-control width-100" type="text" name="cusstname" id="cussname" value="" required />
                                <br />
                                <label>NIC </label><br>
                                <input class="form-control width-100" type="text" name="cussnic" id="cussnic" value="" required />
                                <br />

                                <label>Telephone No</label><br>
                                <input class="form-control width-100" type="number" name="cusstel" id="cusstel" value="" required />
                                <br />
                                <?php

                                $sql_nas  = "SELECT * FROM rn_nationality   ORDER BY nat_id ASC";
                                $result = $conn->query($sql_nas);
                                $resultset = array();
                                while ($row = $result->fetch_assoc()) {
                                    $resultset[] = $row;
                                }

                                ?>

                                <label>Nationality</label><br>
                                <select class="form-control width-100" name="cussNationality" id="cussNationality" required>
                                    <option value="">Select Nationality</option>
                                    <?php foreach ($resultset as $rowData) { ?>
                                        <option value="<?php echo $rowData['nat_id']; ?>"><?php echo $rowData['nationality']; ?> </option>
                                    <?php } ?>
                                </select>
                                </select>
                                <br />

                                <label>Address</label><br>
                                <textarea class="form-control width-100" id="cussaddress" name="cussaddress" cols="60" required></textarea>
                                <br />

                                <label>Username</label><br>
                                <input type="text" class="form-control width-100" name="cussunm" id="cussunm" value="" />
                                <br />

                                <label>Password</label><br>
                                <input class="form-control width-100" type="password" name="cusspass" id="cusspass" value="" />
                                <br />

                                <div class="mb-3 form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="issue" name="issue" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Account Issue</label>
                                </div>

                                <?php if (isset($_GET['msg'])) { ?>

                                    <p class="msg" style="color:red"><?php echo $_GET['msg']; ?></p>

                                <?php } ?>
                                <input class="btn btn-success" type="submit" value="Submit" />

                            </div>
                        </div>

                    </form>


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

<?php
if (isset($_POST["cusstid"])) {

    $cusstid = $_POST["cusstid"];
    $cusstname = $_POST["cusstname"];
    $cussnic = $_POST["cussnic"];
    $cusstel = $_POST["cusstel"];
    $cussNationality = $_POST["cussNationality"];
    $cussaddress = $_POST["cussaddress"];
    $cussunm = $_POST["cussunm"];
    $cusspass = $_POST["cusspass"];
    $issue = 0;


    $check_status  = "SELECT COUNT(rn_cus_id) AS NIC FROM rn_customers WHERE rn_cus_nic ='" . $cussnic . "'";

    $result_nic = mysqli_query($conn, $check_status);
    $row_nic = mysqli_fetch_assoc($result_nic);

    $checkNIC = $row_nic['NIC'];

    if ($checkNIC == '0') {

        $sql = "INSERT INTO rn_customers (rn_cus_new_id,rn_cus_name,rn_cus_nic,rn_cus_nationality,rn_cus_address,rn_cus_tp_no,rn_cus_create) 
             values ('" . $cusstid . "', '" . $cusstname . "', '" . $cussnic . "', '" . $cussNationality . "', '" . $cussaddress . "' , '" . $cusstel . "', '0')";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $sql_login = "INSERT INTO rn_login (rn_login_user_name,rn_login_user_password,rn_login_user_type, rn_login_status,rn_login_user_id,rn_login_user_issue_account) 
                       values ('" . $cussunm . "', '" . $cusspass . "', '0', '','" . $last_id . "', '" . $issue . "') ";

            if ($conn->query($sql_login) === TRUE) {
                echo "<script> alert('Create Successfully');</script>";


                header("Location: index.php");
                //header("Location: customers.php?msg=Save successfully");
            } else {
                echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            }
        }
    } else {
       
        header("Location: createAccount.php?msg=Duplicate NIC");
    }

    $conn->close();
    ob_end_flush();
}

?>