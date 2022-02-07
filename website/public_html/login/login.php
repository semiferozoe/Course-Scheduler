<?php
session_start();
include "db_connection.php";

if(isset($_POST['username']) && isset($_POST['pass'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['pass']);

if(empty($username)) {
    header ("Location: index.php?error=User Name is required");
    exit();
}
else if(empty($password)) {
    header ("Location: index.php?error=Password is require");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $username && $row['password'] === $password) {
        echo "Logged In";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}