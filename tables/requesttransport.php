<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="requesttransporttable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Date and Time</th>
            <th>Requesting Party</th>
            <th>Contact Number</th>
            <th>Patient Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `request_transport`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['date_time']?></td>
            <td><?php echo $fetch['requesting_party']?></td>
            <td><?php echo $fetch['contact_no']?></td>
            <td><?php echo $fetch['patient_name']?></td>
            <td><?php echo $fetch['address']?></td>
            <td>
                <a href="editrequesttransport.php?request_transport_id=<?php echo $fetch['request_transport_id']?>" class="btn btn-sm btn-success"><span class="fa fa-edit"></span></a>
                <!--<a href="viewrequesttransport.php?request_transport_id=<?php echo $fetch['request_transport_id']?>" class="btn btn-sm btn-white">View</a> -->
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