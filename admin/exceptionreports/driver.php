<div class="piedriver doughnut reporttype">
    <label class="text text-danger ">List of Drivers</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Driver Name</th>
                <th>Total Dispatch</th>
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
            $query = $conn->query("SELECT *, count(*) as perdriver FROM `dispatch` where `year` = '$year' group by driver") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['driver']?></td>
                <td><?php echo $fetch['perdriver']?></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <hr>
    <?php require 'require/footerreport.php'?>
</div>