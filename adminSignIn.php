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
  <title>Bhari Hotels & Spas - Sign Up</title>

  <!-- Bootstrap core CSS -->
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
  <link href="signin.css" rel="stylesheet">

</head>

<body class="text-center">
  
    
  <main class="form-signin app">
    <div class="bg"></div>
    
    <form action="adminSignIn.php" method="post">
      <header>
        <img class="main-img" src="pic/pic/12.jpeg">
      </header>

      <h1 class="h3 mb-3 fw-normal" style="margin-top: 10px;">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="userName" name="userName" style="width: 100%;">
        <label for="userName">User Name</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" style="width: 100%;">
        <label for="password">Password</label>
      </div>

      <div class="form-floating">
        <input type="varchar" class="form-control" id="security_code" name="security_code" style="width: 100%;">
        <label for="security_code">Security Code</label>
      </div>

      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <div class="checkbox mb-1">
        <label>
          <input type="checkbox" value="remember-me"> 
          Remember me
        </label>
      </div>
     
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>

    <footer>
        <p> You have an account? <a href="admin.php">Log In</a></p>
    </footer>

  </main>

</body>

</html>


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
  $security_code = validate($_POST['security_code']);
  

  if (empty($uname)) {
    header("Location: adminSignIn.php?error=User Name is required");
    exit();

  } else if (empty($pass)) {
    header("Location: adminSignIn.php?error=Password is required");
    exit();

  } else if (empty($security_code)) {
    header("Location: adminSignIn.php?error=Security Code is required");
    exit();

  } else {
    if ($security_code != "@34Gdrt125ZfvgZCD%^56") {
      header("Location: adminSignIn.php?error=Security Code is Invalid");
      exit();
    }

    $sql = "SELECT * FROM rn_login WHERE rn_login_user_name='$uname' AND rn_login_user_password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
     
      if ($row['rn_login_user_name'] === $uname && $row['rn_login_user_password'] === $pass) {
        echo "Logged in!";
        $_SESSION['userName'] = $row['rn_login_user_name'];
        $_SESSION['id'] = $row['rn_login_user_id'];
        header("Location: dashboard.php");
        exit();

      } else {
        header("Location: adminSignIn.php?error=Incorect User name or password");
        exit();

      }
    } else {

      header("Location: adminSignIn.php?error=Incorect User name or password");
      exit();
    }
  }
}
?>

<style>
  /* Error box */
  .error {
    background: #F2DEDE;
    color: #0c0101;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    margin: 15px 0;
    font-size: 14px;
  }

  /* App Container */
  .app {
    background-color: #fff;
    width: 330px;
    height: auto;
    margin: 2em auto;
    border-radius: 10px;
    padding: 2em;
    position: relative;
    box-shadow: 0 6px 31px -2px rgba(0, 0, 0, 0.3);
    overflow: hidden;
  }

  /* Background Design */
  .bg {
    width: 100%;
    height: 300px;
    background: #257aa6;
    position: absolute;
    top: -100px;
    left: 0;
    right: 0;
    margin: auto;
    background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-blue-creative-gradient-decoration-image_11175.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-clip-path: ellipse(70% 45% at 50% 40%);
    clip-path: ellipse(70% 45% at 50% 40%);
    z-index: 0;
  }

  /* Main image */
  .main-img {
    max-width: 100%;
    border-radius: 50%;
    width: 160px;
    position: relative;
    z-index: 1;
  }

  /* Inputs & Form */
  form {
    position: relative;
    z-index: 2;
    text-align: center;
  }

  .form-input {
    background: rgba(255, 255, 255, 0.7) !important;
    color: #000 !important;
    border-radius: 10px;
    border: 1px solid #ccc;
  }

  /* Fix Bootstrap floating label text color */
  .form-floating {
    margin-bottom: 10px;
  }
  .form-floating > label {
    color: #333;
  }

  /* Placeholder */
  input::placeholder {
    color: #888;
    font-size: 13px;
  }

  /* Buttons */
  button {
    padding: 13px 15px;
    border-radius: 100px;
    border: none;
    background: #257aa6;
    font-family: "Poppins", sans-serif;
    color: #fff;
  }

  /* Footer */
  footer {
    margin-top: 20px;
    text-align: center;
    z-index: 2;
    position: relative;
  }

  /* Text Links */
  a {
    text-decoration: none;
    color: #ffc107;
  }

  /* Responsive */
  @media screen and (max-width: 640px) {
    .app {
      width: 100%;
      height: auto;
      border-radius: 0;
      margin: 0;
    }

    .bg {
      height: 350px;
    }
  }

</style>

