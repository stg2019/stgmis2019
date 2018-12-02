<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
    $dispatch_id = $_POST['dispatch_id'];
?>

<table id="patienttable" class="table table-invoice table-hover">
    <thead>
        <tr>
            <th>Patient Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient` where `dispatch_id` = '$dispatch_id' order by `status` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        $patient_id = $fetch['patient_id'];
        $q = $conn->query("SELECT COUNT(*) as total FROM `vital_signs` where `patient_id` = '$patient_id'") or die(mysqli_error());
        $f = $q->fetch_array();
        $g = $conn->query("SELECT COUNT(*) as total FROM `glassgow_coma_scale` where `patient_id` = '$patient_id'") or die(mysqli_error());
        $g = $g->fetch_array();
        ?>                                      
        <tr>
            <td><?php echo $fetch['patient_name']?></td>
            <td><?php echo $fetch['age']?></td>
            <td><?php echo $fetch['gender']?></td>
            <td>
                <?php
            if ($fetch['status'] == 'Assessed')
                echo "<a class='btn btn-xs btn-white'>Assessment <span class='fa fa-check text-primary'></span></a>";
        else echo "<a class='btn btn-xs btn-danger' href='assessment.php?patient_id=".$fetch['patient_id']."'>Assessment <span class='fa fa-close '></span></a>";
                ?>
                <a class="btn btn-xs btn-white" href="vitalsigns.php?patient_id=<?php echo $fetch['patient_id']?>&dispatch_id=<?php echo $dispatch_id?>">Vital Signs <span class = "badge badge-primary"><?php echo $f['total']?></span></a>
                <a class="btn btn-xs btn-white" href="glassgow.php?patient_id=<?php echo $fetch['patient_id']?>&dispatch_id=<?php echo $dispatch_id?>">Glasgow Scale <span class = "badge badge-primary"><?php echo $g['total']?></span></a>
            </td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>
<?php
}

?>