<div class="monthly quarterly yearly reporttype">
    <label class="text text-danger ">List of Request of Transport</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Month</th>
                <th>Requesting Party</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../require/dbconnection.php';
            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $query = $conn->query("SELECT * FROM `request_transport` where `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['month']?></td>
                <td><?php echo $fetch['requesting_party']?></td>
                <td><?php echo $fetch['patient_name']?></td>
                <td><?php echo $fetch['gender']?></td>
                <td><?php echo $fetch['age'] . ' years old'?></td>
                <td><?php echo $fetch['address']?></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <hr>
    <?php require 'require/otherreports.php'?>
</div>