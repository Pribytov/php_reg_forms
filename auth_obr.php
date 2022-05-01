<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "expisjiy_0207-1", "12345", "expisjiy_0207-1");

if ($mysqli == false) {
    print("error");
} else {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

    if ($result->num_rows == 1) {
        print("ok");
    }
}
?>