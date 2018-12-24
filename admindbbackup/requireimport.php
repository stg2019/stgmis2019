<?php
$message = '';

if(isset($_POST['import']))
{
    if($_FILES['database']['name'] != '')
    {
        $array = explode(".", $_FILES['database']['name']);
        $extension = end($array);
        if($extension == 'sql'){
            $connect = mysqli_connect("localhost", "root", "", "ndrrmo");
            $output = '';
            $count = 0;
            $file_data = file($_FILES['database']['tmp_name']);
            foreach($file_data as $row){
                $start_character = substr(trim($row), 0, 2);
                if($start_character != '--' || $start_character != '/*'
                   || $start_character != '//' || $row != ''){
                    $output = $output . $row;
                    $end_character = substr(trim($row), -1, 1);
                    if($end_character == ';'){
                        if(!mysqli_query($connect, $output)){
                            $count++;
                        }
                        $output = '';
                    }
                }
            }
            if($count > 0) {
                $message = 'Error occurred';
            }
            else {
                $message = 'Successful';
                date_default_timezone_set('Asia/Manila');
                $date=date("F j, Y");
                $time=date("g:i a");
                $user_id=$_SESSION['user_id'];
                $conn = new mysqli("localhost", "root", "", "ndrrmo") or die(mysqli_error());

                $conn->query("INSERT INTO `db_backup` VALUES('', '$user_id', 'Import', '$date', '$time', 'Successfully Imported Database')") or die(mysqli_error());
                $conn->close();
                echo "<script>alert('Successfully imported database!')</script>";
                echo "<script>document.location='systembackup.php'</script>";  
            }
        }
        else {
            echo "<script type='text/javascript'>alert('You must upload SQL file only!');</script>";
            echo "<script>document.location='systembackup.php'</script>";
        }
    }
    else {
        $message = 'Select SQL File.';
    }


}
?>