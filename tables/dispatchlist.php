<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="dispatchtable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Service Number</th>
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
                <a href="editdispatch.php?dispatch_id=<?php echo $fetch['dispatch_id']?>&service_no=<?php echo $fetch['service_no']?>" class="btn btn-sm btn-success"><span class="fa fa-edit"></span></a>
                <!--<a href="#delete_dispatch<?php echo $fetch['dispatch_id']; ?>" data-target="#delete_dispatch<?php echo $fetch['dispatch_id']; ?>" data-toggle="modal" class="btn btn-sm btn-white "><span class="fa fa-trash"></span></a> -->
                <!--<a href="viewdetails.php?dispatch_id=<?php echo $fetch['dispatch_id']?>&service_no=<?php echo $fetch['service_no']?>" class="btn btn-sm btn-white">View</a> -->
                <?php require '../modals/deletedispatch.php'?>
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