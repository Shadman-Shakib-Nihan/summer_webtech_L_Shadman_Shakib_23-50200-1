<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender   = $_POST['gender'];
    $subject  = $_POST['subject'];
    

    if (empty($fullname) || empty($username) || empty($password) || 
        empty($gender) || empty($subject)) {
        echo "Enter Valid data";
        exit;
    }

    $_SESSION['fullname'] = $fullname;
    $_SESSION['username'] = $username;
    $_SESSION['gender'] = $gender;
    $_SESSION['subject'] = $subject;

    header("Location: lab8.3_dashboard.php");
    exit;
} else {
    echo "Invalid Request";
}
?>

