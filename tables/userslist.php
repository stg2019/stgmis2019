<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="userstable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>User Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `users`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['username']?></td>
            <td><?php echo $fetch['password']?></td>
            <td><?php echo $fetch['user_role']?></td>
            <td>
                <a href="#edit_user<?php echo $fetch['user_id']; ?>" data-target="#edit_user<?php echo $fetch['user_id']; ?>" data-toggle="modal" class="btn btn-sm btn-success "><span class="fa fa-edit"></span></a>
                <a href="#delete_user<?php echo $fetch['user_id']; ?>" data-target="#delete_user<?php echo $fetch['user_id']; ?>" data-toggle="modal" class="btn btn-sm btn-success "><span class="fa fa-trash"></span></a>
                <a href="viewdetails.php?id=<?php echo $fetch['user_id']?>&username=<?php echo $fetch['username']?>" class="btn btn-sm btn-white">View</a>
                <?php require '../modals/edituser.php' ?>
                <?php require '../modals/deleteuser.php'?>
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