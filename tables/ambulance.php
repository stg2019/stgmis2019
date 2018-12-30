<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="ambulancetable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Ambulance ID</th>
            <th>Plate Number Name</th>
            <th>Vehicle Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `ambulance` order by `ambulance_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['ambulance_id']?></td>
            <td><?php echo $fetch['plate_no']?></td>
            <td><?php echo $fetch['vehicle_name']?></td>
            <td><?php  if ($fetch['status'] == 'Unbook') echo "<span class='badge badge-info'>Unbook</span>";
        if ($fetch['status'] == 'Booked') echo "<span class='badge badge-danger'>Booked</span>";
                ?></td>
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