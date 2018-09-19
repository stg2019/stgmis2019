<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>

<table id="masterlistpatienttable" class="table table-hover table-condensed nowrap">
    <thead>
        <tr>
            <th>Patient Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Contact Number</th>
            <th>Home Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['patient_name']?></td>
            <td><?php echo $fetch['age']?></td>
            <td><?php echo $fetch['gender']?></td>
            <td><?php echo $fetch['date_of_birth']?></td>
            <td><?php echo $fetch['contact_no']?></td>
            <td><?php echo $fetch['home_address']?></td>
            <td>
                <a href="viewdetails.php?dispatch_id=<?php echo $fetch['dispatch_id']?>&service_no=<?php echo $fetch['service_no']?>" class="btn btn-sm btn-white">View</a>
            </td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
<?php
}

?>