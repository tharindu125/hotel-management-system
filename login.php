<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>




    <style>
        body {
            font-family: 'Calibri';
            background-image: url('pic/pic.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }



        h1 {
            font-family: 'Calibri' !important;
            color: white;
            font-size: 40px;
        }



        .dectext {
            width: 300px;
            height: 40px;
            padding: 5px;
            margin-top: 20px;
            border: grey solid 1px;
            border-radius: 5px;
        }



        .decbtn {
            width: 310px;
            height: 50px;
            padding: 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: #00223b solid 1px;
            background-color: #00223b;
            color: whitesmoke;
            font-size: 18px;
        }
    </style>



</head>



<body>




    <div style="background-color: #030303b3; width: 325px; margin: auto; margin-top: 100px; padding:50px; border-radius: 20px;  text-align: center; -webkit-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66); -moz-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);">
        <form action="admin.php" method="POST">



            <h1>Login Form</h1>



            <input type="text" name="uname" placeholder="Username" class="dectext">



            <input type="password" name="upass" placeholder="Password" class="dectext">
            <br><br>
            <div>
                <a href="#">Forgot password?</a>
            </div>



            <input type="submit" value="Login" class="decbtn">
            <br><br>



        </form>
    </div>
</body>

</html>

<?php





if (isset($_POST["uname"])) {
    $unm = $_POST["uname"];
    $upass = $_POST["upass"];
    $sever_name = "localhost";
    $db_uname = "root";
    $db_pass = "";
    $db_name = "rn_hotel";
    $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "SELECT * From rn_login where rn_login_user_name='" . $unm . "' and rn_login_user_password='" . $upass . "' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $uid = $row["rn_login_id"];
                $fnm = $row["rn_login_user_name"];

                $_SESSION["fname"] =  $fnm;
                $_SESSION["uid"] = $uid;

                header('Location: staff.php');
                exit;
            }
        } else {
            $_SESSION["ucode"] = "no";
            
            echo "<script>alert('Wrong username or password. Please, try again.');</script>";
        }



        $conn->close();
    }
}



?>