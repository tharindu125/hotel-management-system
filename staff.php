<!--?php
session_start();



if($_SESSION["ucode"]!="01254"){
    echo "<script>alert('Please login first..');</script>";
    header('Location: login.php');
    exit;
}else{
    $fnm =  $_SESSION["name"];
    $uid = $_SESSION["uid"];
    $nic = $_SESSION["unic"];
}
?-->







<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List Page</title>



   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>



   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">






</head>



<body style="margin: 50px;">




<div>Hello <?php //echo $fnm; ?> <br/>



</div>





<div>



<a class="btn btn-success" href="addStaffPage.php">Add New Staff Member</a>
<br/><br/>
</div>



   <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Tel</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>



           <?php



           $sever_name = "localhost";
            $db_uname = "root";
            $db_pass = "";
            $db_name = "rn_hotel";



           $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {



               // echo "<br>Connected successfully<br>";



               $sql = "SELECT *  From rn_employee ";



               $result = $conn->query($sql);




                if ($result->num_rows > 0) {




                    while ($row = $result->fetch_assoc()) {



                       $my_id = $row["rn_emp_id"];




                        echo "<tr>";



                       echo "<td>" . $row["rn_emp_desig"] . " </td>";
                        echo "<td>" . $row["rn_name"] . "</td>";
                        echo "<td>" . $row["rn_emp_nic_no"] . " </td>";
                        echo "<td>" . $row["rn_emp_tp_no"] . " </td>";
                        echo "<td>" . $row["rn_emp_address"] . " </td>";
                
                        echo "<td> <button class='btn btn-success' myid='". $row['rn_emp_id']."' onclick='staffUpdate(" . $my_id . ");'><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button> </td>";
                        echo "<td> <button class='btn btn-danger' onclick='staffDelete(" . $my_id . ");'>Delete</button> </td>";



                       echo "</tr>";
                    }
                } else {
                    echo "<br>No record...<br>";
                }



               $conn->close();
            }




            ?>



       <!-- </tbody>
        <tfoot>
            <tr>
                <th>Position</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Tel</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table> -->


   <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        function staffUpdate(staffid) {
            window.location.href = 'staffUpdatePage.php?staffid=' + staffid;
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




</body>



</html>