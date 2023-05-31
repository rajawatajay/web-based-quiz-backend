<?php
//Database Connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "college";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
echo "Connected succesfully";
}
else
{
	// echo "Sorry,we are having some problems because";
	die(mysqli_connect_error());
}

?>