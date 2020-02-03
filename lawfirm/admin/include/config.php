<?php
$con = new mysqli("localhost", "root", "", "hms") or die(mysqli_error($link));
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>