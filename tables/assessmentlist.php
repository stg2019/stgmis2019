<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="dispatchtable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Service No</th>
            <th>Date and Time</th>
            <th>Dispatched For</th>
            <th>Driver</th>
            <th>Call Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `dispatch`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['service_no']?></td>
            <td><?php echo $fetch['date_time_call']?></td>
            <td><?php echo $fetch['dispatched_for']?></td>
            <td><?php echo $fetch['driver']?></td>
            <td><?php echo $fetch['call_location']?></td>
            <td>
                <a href="viewdetails.php?dispatch_id=<?php echo $fetch['dispatch_id']?>&service_no=<?php echo $fetch['service_no']?>" class="btn btn-sm btn-success">Assess</a>
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