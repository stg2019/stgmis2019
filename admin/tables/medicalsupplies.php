<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="medicalsupplytable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Stock ID</th>
            <th>Medical Supply Name</th>
            <th>Medical Supply Description</th>
            <th>Supplier</th>
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
            <td><?php echo $fetch['medical_supply_name']?></td>
            <td><?php echo $fetch['medical_supply_description']?></td>
            <td><?php echo $fetch['supplier']?></td>
            <td><?php echo $fetch['date_created']?></td>
            <td><a href="#edit<?php echo $fetch['stock_id']; ?>" data-target="#edit<?php echo $fetch['stock_id']; ?>" data-toggle="modal" class="btn btn-sm btn-primary ">Edit</a>
                <?php require '../../modals/editmedicalsupplies.php'?>
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