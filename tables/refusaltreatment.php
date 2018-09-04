<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
?>
<table id="refusaltreatmenttable" class="table table-hover table-condensed nowrap" width="100%">
    <thead>
        <tr>
            <th>Date of Incident</th>
            <th>Name of Patient</th>
            <th>Witness 1</th>
            <th>Witness 2</th>
            <th>Prepared By</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `refusal_treatment`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['date_incident']?></td>
            <td><?php echo $fetch['signed']?></td>
            <td><?php echo $fetch['witness1']?></td>
            <td><?php echo $fetch['witness2']?></td>
            <td><?php echo $fetch['prepared_by']?></td>
            <td><a href="editrefusaltreatment.php?refusal_treatment_id=<?php echo $fetch['refusal_treatment_id']?>" class="btn btn-sm btn-success"><span class="fa fa-edit"></span></a></td>

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