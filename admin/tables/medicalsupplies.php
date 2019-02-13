<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="medicalsupplytable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Stock ID</th>
            <th>Item Code</th>
            <th>Medical Supply Name</th>
            <th>Unit of Issue</th>
            <th>Date Created</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `medical_supply_stocks` order by `stock_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['stock_id']?></td>
            <td><?php echo $fetch['item_code']?></td>
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['unit_of_issue']?></td>
            <td><?php echo $fetch['date_created']?></td>
            <td>
                <a href="editmedicalsupply.php?stock_id=<?php echo $fetch['stock_id']?>" class="btn btn-sm btn-primary"><span class="fa fa-edit"></span></a>
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