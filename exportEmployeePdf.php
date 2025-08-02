
<?php
include 'conetion.php';
$conn = OpenCon();


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<table class="table table-striped table-sm">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Emp No</th>
        <th scope="col">EPF No</th>
        <th scope="col">NIC</th>
        <th scope="col">Telephone No</th>
        <th scope="col">Designation</th>
        <th scope="col">Employment Name</th>
        <th scope="col">Address</th>
        <th scope="col">Account Issue</th>
        <th scope="col">Action</th>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

 
</thead></table>');
$mpdf->Output('a.pdf','D');

?>