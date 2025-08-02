<html>
<head>
    <title>Bhari Hotels & Spas - Login</title>
</head>
<body>
<?php
ob_start();
session_start();
include 'conetion.php'; //get conection
$conn = OpenCon();
?>
<div class="app">
    <div class="bg"></div>
    <form action="admin.php" method="post">
        <header>
            <img class="main-img" src="pic/pic/12.jpeg">
        </header>

        <div class="inputs">
            <input type="text" id="userName" name="userName" placeholder="User Name">
            <input type="password" id="password" name="password" placeholder="Password">
            <?php if (isset($_GET['error'])) {
                ?>
                <div class="alert alert-danger error" role="alert">
                    Incorect User name or password
                </div>

            <?php }
            ?>
            <?php if (isset($_GET['suss'])) {
                ?>
                <div class="alert alert-success suss" role="alert">
                    Login successfully
                </div>
            <?php }
            ?>
            <br></br>
            <p class="light">
                <!-- <a href="#">Forgot password?</a> -->
            </p>
        </div>
        <button type="submit">Continue</button>
    </form>

    <footer>
        <!-- <button type="submit">Continue</button> -->
        <p>
            <!-- Don't have an account? <a href="#">Sign Up</a> -->
        </p>
    </footer>
</div>

<style>
    img {
        max-width: 100%;
    }

    .app {
        background-color: #fff;
        width: 330px;
        height: 570px;
        margin: 2em auto;
        border-radius: 5px;
        padding: 1em;
        position: relative;
        overflow: hidden;
        box-shadow: 0 6px 31px -2px rgba(0, 0, 0, 0.3);
    }

    a {
        text-decoration: none;
        color: #257aa6;
    }

    p {
        font-size: 13px;
        color: #333;
        line-height: 2;
    }

    .light {
        text-align: right;
        color: #fff;
    }

    .light a {
        color: #fff;
    }

    .bg {
        width: 400px;
        height: 550px;
        background: #257aa6;
        position: absolute;
        top: -5em;
        left: 0;
        right: 0;
        margin: auto;
        background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-blue-creative-gradient-decoration-image_11175.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        -webkit-clip-path: ellipse(69% 46% at 48% 46%);
        clip-path: ellipse(69% 46% at 48% 46%);
    }

    form {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        text-align: center;
        padding: 2em;
    }

    header {
        width: 220px;
        height: 220px;
        margin: 1em auto;
    }

    form input {
        width: 100%;
        padding: 13px 15px;
        margin: 0.7em auto;
        border-radius: 100px;
        border: none;
        background: rgb(255, 255, 255, 0.3);
        font-family: "Poppins", sans-serif;
        outline: none;
        color: #fff;
    }

    input::placeholder {
        color: #fff;
        font-size: 13px;
    }

    .inputs {
        margin-top: -4em;
    }

    footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2em;
        text-align: center;
    }

    button {
        width: 100%;
        padding: 13px 15px;
        border-radius: 100px;
        border: none;
        background: #257aa6;
        font-family: "Poppins", sans-serif;
        outline: none;
        color: #fff;
    }

    @media screen and (max-width: 640px) {
        .app {
            width: 100%;
            height: 100vh;
            border-radius: 0;
        }

        .bg {
            top: -7em;
            width: 450px;
            height: 95vh;
        }

        header {
            width: 90%;
            height: 250px;
        }

        .inputs {
            margin: 0;
        }

        input,
        button {
            padding: 18px 15px;
        }
    }

    .main-img {
        max-width: 100%;
        border-radius: 50%;
        width: 160px;
    }
</style>

<?php

if (isset($_POST['userName']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['userName']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: admin.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: admin.php?error=Password is required");

        exit();
    } else {
        $sql = "SELECT * FROM rn_login WHERE rn_login_user_name='$uname' AND rn_login_user_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);



            if ($row['rn_login_user_name'] === $uname && $row['rn_login_user_password'] === $pass) {
                $_SESSION['userName'] = $row['rn_login_user_name'];
                $_SESSION['id'] = $row['rn_login_user_id'];
                $_SESSION["type"] = $row['rn_login_user_type'];


                header("refresh:20;url=admin.php?suss=OK");
                header("Location: dashboard.php");


                exit();
            } else {
                header("Location: admin.php?error=Incorect22");
                exit();
            }
        } else {
            header("Location: admin.php?error=Incorect");
            exit();
        }
    }
} else {

    $conn->close();
    ob_end_flush();
}
?>
</body>
</html>