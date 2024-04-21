<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_akpoly";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "employee_akpoly");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>