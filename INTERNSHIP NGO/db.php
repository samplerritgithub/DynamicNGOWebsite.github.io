<?php
$conn = new mysqli("localhost","root","ngo");
// check connection 
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error); 
}
echo "Connected Successfully";

?>