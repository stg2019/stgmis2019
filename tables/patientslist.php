<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
    $dispatch_id = $_POST['dispatch_id'];
?>

<table id="patienttable" class="table table-invoice table-hover">
    <thead>
        <tr>
            <th>PATIENT NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>CONTACT NUMBER</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient` where `dispatch_id` = '$dispatch_id' order by `status` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['patient_name']?></td>
            <td><?php echo $fetch['age']?></td>
            <td><?php echo $fetch['gender']?></td>
            <td><?php echo $fetch['contact_no']?></td>
            <td>
                <?php
            if ($fetch['status'] == 'Assessed')
                echo '<span class="label label-success">Assessment Done<span>';
        else echo "<a class='btn btn-xs btn-danger' href='assessment.php?patient_id=".$fetch['patient_id']."'>Assessment</a>";
                ?>
            </td>
            <td></td>
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