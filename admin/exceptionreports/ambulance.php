<div class="pieambulance doughnutambulance reporttype">
    <label class="text text-danger ">List of Drivers</label>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Ambulance Name</th>
                <th>Number Used</th>
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
            $query = $conn->query("SELECT *, count(*) as perambulance FROM `dispatch` where `year` = '$year' group by ambulance") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['ambulance']?></td>
                <td><?php echo $fetch['perambulance']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <?php require 'require/footerreport.php'?>
</div>