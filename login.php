<?php
session_start();

if (!isset($_COOKIE['break'])) {
    $con = mysqli_connect("localhost", "seiz", "rhtvtyxeu", "practice_db") or die("Error " . mysqli_error($con));
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if ($row = mysqli_fetch_array($result)) {
        if (isset($_SESSION['errorPass'])) {
            unset($_SESSION['errorPass']);
        }
        $id = $row['id'];
        echo "Id {$id} last visit {$row['last_visit']}";
        setcookie("last_visit", $row['last_visit']);
        mysqli_query($con, "UPDATE users SET last_visit=now() WHERE id = '{$id}'");
        if (isset($_POST['save'])) {
            setcookie("id", $row['id']);
        }
    } else {
        //delete saved password if login wrong
        setcookie("id", null, time() - 3600);
        echo "Incorrect Login or Password!!!\n";
        if (!isset($_SESSION['errorPass'])) {
            $_SESSION['errorPass'] = 1;
        } else { //in this moment $_SESSION['errorPass'] + 1 error = 2
            setcookie("break", true, time() + 180);
            echo "You are blocked for 3 minutes";
        }
    }
} else {
    echo "You are blocked for 3 minutes";
}