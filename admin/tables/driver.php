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
            <th>Action</th>
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
            <td><?php  if ($fetch['status'] == 'Unbook') echo "<span class='badge badge-info'>Unbook</span>";
        if ($fetch['status'] == 'Booked') echo "<span class='badge badge-danger'>Booked</span>";
                ?></td>
            <td>
                <a href="editdriver.php?driver_id=<?php echo $fetch['driver_id']?>" class="btn btn-sm btn-primary"><span class="fa fa-edit"></span></a>
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