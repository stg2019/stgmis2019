  <div class="invoice-price">
        <?php
        require '../require/dbconnection.php';
        $year = date('Y');
        if(isset($_GET['year']))
        {
            $year=$_GET['year'];
        }
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        $query = $conn->query("SELECT count(*) as total FROM `dispatch` where `year` = '$year'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        ?>
        <div class="invoice-price-left">
            <div class="invoice-price-row">
                <div class="sub-price">
                    <small>Approved By:</small>
                    <?php echo $find['complete_name']?>
                    <small>BDRRMO Administrator</small>
                </div>
            </div>
        </div>
        <div class="invoice-price-right">
            <small>TOTAL DISPATCHMENT</small> <?php echo $fetch['total']?>
        </div>
    </div>