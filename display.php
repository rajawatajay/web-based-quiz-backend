<?php
include("conn.php");
error_reporting(0);

$query = "select * from registration";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
echo "$total";

if($total !==0)
{
    echo "Table has record <br>";
}
else
{
    echo "No record Found";
}

$result=mysqli_fetch_assoc($data);

echo $result;
echo " Roll Number: ".$result['rollno'].", Student Name: ".$result['studentname'].", Class: ".$result['class'];

?>