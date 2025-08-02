<?php
ob_start();
session_start();
include 'conetion.php';
$conn = OpenCon();

$id = $_POST["id"];
$file = $_POST["file"];


if($file == 'travel'){
    
$sql = "DELETE FROM rn_hotel_travel_comapny where  rn_hotel_trvel_com_id= '".$id."' ";



   if ($conn->query($sql) === TRUE) {
        echo "Your record is Deleted successfully";
    } else {
        echo "Error : ". $sql . "<br>" . $conn->error;
    }
}




    $conn->close();
