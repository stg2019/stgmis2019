<div class="colyearly baryearly lineyearly pieyearly doughnutyearly reporttype">
    <label class="text text-danger ">Per Month</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Year</th>
                <th>Total Count</th>
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
            $query1 = $conn->query("SELECT count(*) as permonth FROM `dispatch` where `year` = '$year'") or die(mysqli_error());
            $fetch1 = $query1->fetch_array();
            $query = $conn->query("SELECT year, count(*) as count FROM `dispatch` where `year` = '$year' group by year order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
               // $permonth = ($fetch['count']/$fetch1['permonth']) * 100;
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td><?php echo $fetch['count']?></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <label class="text text-danger">Per Dispatch</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead >
            <tr  class="warning">
                <th >Dispatched For</th>
                <th>Total Count</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../require/dbconnection.php';
            $query1 = $conn->query("SELECT count(*) as perdispatch FROM `dispatch` where `year` = '$year'") or die(mysqli_error());
            $fetch1 = $query1->fetch_array();
            $query = $conn->query("SELECT dispatched_for, count(*) as count FROM `dispatch` where `year` = '$year' group by dispatched_for order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $perdispatch = ($fetch['count']/$fetch1['perdispatch']) * 100;
            ?>                                      
            <tr>
                <td><?php echo $fetch['dispatched_for']?></td>
                <td><?php echo $fetch['count']?></td>
                <td><?php echo number_format($perdispatch)?>%</td>
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