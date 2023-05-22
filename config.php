<?php
$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "groupr";

$conn = new mysqli($servername, $susername, $spassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>