<div class="piedriver doughnutdriver reporttype">
    <?php
    require '../require/dbconnection.php';
    $query1 = $conn->query("SELECT *, count(*) as perdriver FROM `dispatch` where `year` = '$year' group by driver") or die(mysqli_error());
    while($fetch = $query1->fetch_array()){
    ?>                                      
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-gradient-danger" onclick="#">
            <div class="stats-icon"><i class="fa fa-car"></i></div>
            <div class="stats-info">
                <h4><?php echo $fetch['driver']?></h4>
                <p><?php echo $fetch['perdriver']?></p>	
            </div>
        </div>
    </div>
    <?php
    }
    $conn->close();
    ?>
    <hr>
    <?php require 'require/footerreport.php'?>
</div>