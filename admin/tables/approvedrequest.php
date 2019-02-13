<?php
require '../require/dbconnection.php';

if(isset($_POST['show'])){
?>
<table id="approvedtable" class="table table-hover table-condensed" width="100%">
    <thead>
        <tr>
            <th>Medical Supply Name</th>
            <th>Requested Quantity</th>
            <th>Approved Quantity</th>
            <th>Requested By</th>
            <th>Date Requested</th>
            <th>Date Approved</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `medical_supply_request`, `users` where medical_supply_request.user_id = users.user_id && medical_supply_request.status = 'Approved'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['requested_quantity']?></td>
            <td><?php echo $fetch['requested_quantity'] - $fetch['to_approved_quantity']?></td>
            <td><?php echo $fetch['complete_name']?></td>
            <td><?php echo $fetch['date_requested']?></td>
            <td><?php echo $fetch['date_approved']?></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>
<?php
}

?>


