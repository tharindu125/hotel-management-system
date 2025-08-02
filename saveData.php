<?php
session_start();
include 'conetion.php';
$conn = OpenCon();
?>
<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['designation'])) {

  
    
    $desi = validate($_POST['designation']);
    if (empty($desi)) {

        header("Location: company.php?error_desi=Designation is required");
        exit();
    } else {
        $sql = "INSERT INTO rn_designation (rn_desin_name) VALUES ('$desi')";
        if ($conn->query($sql) === TRUE) {
            //header("Location: company.php?error=Save successfully");
            header("Location: company.php");
           
        } else {
            header("Location: company.php?error_desi=Error");
            exit();
        }
    }
}


if (isset($_POST['rn_e_name_name'])) {

  
    
    $ename = validate($_POST['rn_e_name_name']);
    if (empty($ename)) {

        header("Location: company.php?error_ename=Employment Name is required");
        exit();
    } else {
        $sql = "INSERT INTO rn_employment_name (rn_e_name_name) VALUES ('$ename')";
        if ($conn->query($sql) === TRUE) {
            //header("Location: company.php?error_ename=Save successfully");
            header("Location: company.php");
           
        } else {
            header("Location: company.php?error_ename=Error");
            exit();
        }
    }
}