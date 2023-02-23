<?php
$hostname = "localhost";
$username = "almir";
$password = "admin";
$dbname = "loginform";

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if (!$conn) {
    echo 'failed to connect';
    # code...
}
 else {
    echo '';
 }

?>