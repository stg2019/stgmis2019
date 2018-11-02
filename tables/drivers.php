<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="drivertable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Driver ID</th>
            <th>Driver Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Duty Hours</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `driver` order by `driver_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['driver_id']?></td>
            <td><?php echo $fetch['driver_name']?></td>
            <td><?php echo $fetch['age']?></td>
            <td><?php echo $fetch['gender']?></td>
            <td><?php echo $fetch['duty_hours']?></td>
            <td><?php echo $fetch['status']?></td>
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