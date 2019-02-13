<?php
require '../require/dbconnection.php';

if(isset($_POST['show'])){
?>
<table id="requesttable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Medical Supply Name</th>
            <th>Requested Quantity</th>
            <th>Approved Quantity</th>
            <th>Date Requested</th>
            <th>Status</th>
            <th>Requested By</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `medical_supply_request`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        $user_id = $fetch['user_id'];
        $query2 = $conn->query("select * from `users` where `user_id` = '$user_id'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();
        ?>                                      
        <tr>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['requested_quantity']?></td>
            <td><?php echo $fetch['requested_quantity'] - $fetch['to_approved_quantity']?></td>
            <td><?php echo $fetch['date_requested']?></td>
            <td><center><?php if ($fetch['status'] == 'Pending')echo "<span class='badge badge-danger animated infinite pulse'>Pending</span>";
        if ($fetch['status'] == 'Approved')echo "<span class='badge badge-info'>Approved</span>"
                ?></center></td>
            <td><?php echo $fetch2['complete_name']?></td>
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


