<?php
require '../require/dbconnection.php';

if(isset($_POST['show'])){
?>
<table id="inventorytable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Item Code</th>
            <th>Medical Supply Name</th>
            <th>Unit of Issue</th>
            <th>Running Balance</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `medical_supply_stocks_emt`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['item_code']?></td>
            <td><?php echo $fetch['unit_of_issue']?></td>
            <td><?php echo $fetch['running_balance']?></td>
            <td><center><?php if ($fetch['running_balance']<=15)echo "<span class='badge badge-danger animated infinite pulse'>Request</span>";
        if ($fetch['running_balance']>=16)echo "<span class='badge badge-info'>Average</span>"
                ?></center></td>
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


