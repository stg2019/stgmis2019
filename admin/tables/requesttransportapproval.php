<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="requesttransporttable" class="table table-hover table-condensed" width="100%">
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
    $query = $conn->query("select * from `request_transport` where status = 'Pending'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        $newDate = date("F j, Y", strtotime($fetch['date_time']));
        ?>                                      
        <tr>
            <td><?php echo $newDate?></td>
            <td><?php echo $fetch['requesting_party']?></td>
            <td><?php echo $fetch['contact_no']?></td>
            <td><?php echo $fetch['patient_name']?></td>
            <td><?php echo $fetch['address']?></td>
            <td>
                <button type = "button" class = "btn btn-sm btn-primary approve_request" value="<?php echo $fetch['request_transport_id']; ?>">Approve</button>
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