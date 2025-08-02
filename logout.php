<html>
<title>logout</title>

<body>
    <?php
    session_start();
    unset($_SESSION["userName"]);
    unset($_SESSION["password"]);

    // session_unset();

    // session_destroy();
    header("Location:admin.php");
    ?>
</body>

</html>