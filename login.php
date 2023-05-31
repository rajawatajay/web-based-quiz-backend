<?php
include "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .label{
            height: 50vh;
            width: 50vh;
            margin: auto;
            border: 2px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dtc{
            display: flex;
            justify-content: center;
        }
       
    </style>
</head>

<body>
    <div class="label" >
        <form method="get" action="" class="frm">

            <label for="rollno">Roll No</label><br>
            <input type="text" required="" name="rollno"></input><br>
            <label for="studentname">Student Name</label><br>
            <input type="text" required="" name="studentname"></input><br>
            <label for="class">Class</label><br>
            <input type="text" required="" name="class"></input><br><br>
            <input type="submit" name="savedata" value="Insert"></input>
        </form>
    </div>
<?php
if(isset($_GET['savedata']))
{
    $rn=$_GET['rollno'];
    $sn=$_GET['studentname'];
    $cl=$_GET['class'];

    if($rn!="" && $sn!="" && $cl!="")
    {
        $query="INSERT INTO registration VALUE ('$rn','$sn','$cl')";
        $data=mysqli_query($conn,$query);

        if($data)
        {
            echo "<font color='green'><p class='dtc'>Data inserted into database</p>";
        }
        else
        {
            echo "Database insertion error";
        }
    }
    else
    {
        echo "All fields all required";
    }
}

?>


</body>

</html>