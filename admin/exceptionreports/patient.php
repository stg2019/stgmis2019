<div class="patient reporttype">
    <h4> Bacolod Disaster Risk Reduction Management Office</h4>
    <small>2nd Floor, Old City Hall, Luzuriaga St., Bacolod City 6100</small> <br>
    <small>432-3879</small>
    <br><br>
    <h4 class="text text-danger">Patients List for the Year <?php echo $_GET['year']?> - <?php echo $fetch['total']?> patients</h4>
    <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead >
            <tr  class="warning">
                <th >Patient Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Contact No</th>
                <th>Home Address</th>
                <th>Dispatch for</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../require/dbconnection.php';
            $query = $conn->query("SELECT * FROM `dispatch`, `patient` WHERE dispatch.dispatch_id = patient.dispatch_id && dispatch.year = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['patient_name']?></td>
                <td><?php echo $fetch['age']?></td>
                <td><?php echo $fetch['gender']?></td>
                <td><?php echo $fetch['contact_no']?></td>
                <td><?php echo $fetch['home_address']?></td>
                <td><?php echo $fetch['dispatched_for']?></td>
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