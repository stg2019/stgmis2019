<?php
require '../require/dbconnection.php';
function getstatus($status){
    if($status == '0'){
        return "Not Active";
    }else{
        return "Active";
    }
}

if(isset($_POST['show'])){
?>
<table id="emttable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Complete Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date and Time Created</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `users` where `user_role` = 'EMT' order by `user_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['user_id']?></td>
            <td><?php echo $fetch['complete_name']?></td>
            <td><?php echo $fetch['username']?></td>
            <td>********</td>
            <td><?php echo $fetch['date_created']. ' ' .$fetch['time_created']?></td>
            <td><?php echo getstatus($fetch['status'])?></td>
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