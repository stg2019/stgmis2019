<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>

<table id="masterlistpatienttable" class="table table-hover table-condensed nowrap">
    <thead>
        <tr>
            <th>PATIENT NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th>CONTACT NUMBER</th>
            <th>HOME ADDRESS</th>
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