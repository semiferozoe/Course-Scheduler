<?php
# connecting index.php to mysql
    if($_SERVER['REQUEST_METHOD'] == 'LIST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', 'root', 'test') or die("Connection Failed" .mysqli_connect_error())
        if(isset($_POST['dept']) && isset($_POST['number']) && isset($_POST['course'])){
            $dept=$_POST['dept'];
            $number=$_POST['number'];
            $course=$_POST['course'];

            $sql = "INSERT INTO `courses` (`dept`, `number`, course`) VALUES ('$dept', '$number', '$course')";
        
            $query = mysqli_query($conn,$sql);
            if($query){
                echo 'Entry Successful!'
            }
            else{
                echo 'Error Occurred :c';
            }
        }
    }
?>