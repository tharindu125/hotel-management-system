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
  <title>Signin Template · Bootstrap v5.0</title>





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

  <main class="form-signin">
    <form action="admin.php" method="post">
      <img class="mb-4" src="pic/pic/12.jpeg" alt="" width="150" height="150">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="userName" name="userName">
        <label for="floatingInput">User Name</label>
      </div>


      <br>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password">
        <label for="floatingPassword">Password</label>
      </div>

      <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

      <?php } ?>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
     
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
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
      
      // var_dump($_POST['userName']);
     
      if ($row['rn_login_user_name'] === $uname && $row['rn_login_user_password'] === $pass) {

        echo "Logged in!";

        $_SESSION['userName'] = $row['rn_login_user_name'];

       // $_SESSION['name'] = $row['name'];

        $_SESSION['id'] = $row['rn_login_user_id'];

        header("Location: dashboard.php");

        exit();
      } else {

        header("Location: admin.php?error=Incorect User name or password");

        exit();
      }
    } else {

      header("Location: admin.php?error=Incorect User name or password");

      exit();
    }
  }
} else {

  // header("Location: dashboard.php");

  exit();
}

?>

<style>
  .error {

    background: #F2DEDE;

    color: #0c0101;

    padding: 10px;

    width: 95%;

    border-radius: 5px;

    margin: 20px auto;

  }
</style>