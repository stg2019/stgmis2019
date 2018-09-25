<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="exportimporttable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Activity</th>
            <th>Date and Time</th>
            <th>Remarks</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `db_backup`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['activity']?></td>
            <td><?php echo $fetch['date']. ' ' .$fetch['time']?></td>
            <td><?php echo $fetch['status']?></td>
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