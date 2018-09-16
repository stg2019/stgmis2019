<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="calllogstable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Call ID</th>
            <th>Date and Time</th>
            <th>Complete Address</th>
            <th>Emergency</th>
            <th>Caller Name</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `call_logs` order by `call_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['call_id']?></td>
            <td><?php echo $fetch['date_time_call']?></td>
            <td><?php echo $fetch['complete_address']?></td>
            <td><?php echo $fetch['emergency']?></td>
            <td><?php echo $fetch['caller_name']?></td>
            <td><?php echo $fetch['contact_no']?></td>
            <td>
                <a href="editcalllog.php?call_id=<?php echo $fetch['call_id']?>" class="btn btn-sm btn-success"><span class="fa fa-edit"></span></a>
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