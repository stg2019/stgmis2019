<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
    $dispatch_id = $_POST['dispatch_id'];
?>

<table id="itemtable" class="table table-invoice table-hover">
    <thead>
        <tr>
            <th>Medical Supply Name</th>
            <th>Quantity Used</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `items_used` where `dispatch_id` = '$dispatch_id'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['quantity_used']?></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>
<?php
}

?>