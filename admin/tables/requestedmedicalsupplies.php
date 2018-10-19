<?php
require '../require/dbconnection.php';

if(isset($_POST['show'])){
?>
<table id="requestmedicaltable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Medical Supply Name</th>
            <th>Requested Quantity</th>
            <th>Date Requested</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `medical_supply_request`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['requested_quantity']?></td>
            <td><?php echo $fetch['date_requested']?></td>
            <td><center><?php if ($fetch['status']=='Pending')echo "<a href='#approve".$fetch['medical_supply_request_id']."' 
            data-target='#approve".$fetch['medical_supply_request_id']."' data-toggle='modal' class='btn btn-sm btn-primary'>Approve</a>";
        if ($fetch['status']=='Approved')echo "<span class='badge badge-info badge-square'>Done</span>"
                ?></center></td>
                 <?php require '../../modals/approverequest.php'?>
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


