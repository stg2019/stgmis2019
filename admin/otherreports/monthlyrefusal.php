<div class="monthly quarterly yearly reporttype">
    <label class="text text-danger ">List of Refusal of Treatment</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Month</th>
                <th>Patient Name</th>
                <th>Witness 1</th>
                <th>Witness 2</th>
                <th>Date of Incident</th>
                <th>Statements</th>
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
            $query = $conn->query("SELECT * FROM `refusal_treatment` where `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['month']?></td>
                <td><?php echo $fetch['signed']?></td>
                <td><?php echo $fetch['witness1']?></td>
                <td><?php echo $fetch['witness2']?></td>
                <td><?php echo $fetch['date_incident']?></td>
                <td><?php echo $fetch['statements']?></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <hr>
    <?php require 'require/totalrefusal.php'?>
</div>