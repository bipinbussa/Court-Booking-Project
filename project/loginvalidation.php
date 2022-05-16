<?php
$con=mysqli_connect("cloud.c7sovmb4ucbm.ap-south-1.rds.amazonaws.com","cloud","cloud123");
session_start();
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"cloudcomputing");
$result = mysqli_query($con,"SELECT * FROM register");

//echo file_get_contents("page2.html");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$a1=($_POST["tb1"]);
$a2=($_POST["tb2"]);
$count=0;$count1=0;$count2=0;
if($a1=="" || $a2==""){
    echo "<script>alert('Fill all details');</script>";
    include 'page1.html';
    $count2=1;
}
while($row = mysqli_fetch_array($result))
{
if($a1==$row['username']){
    $count=1;
    if($a2==$row['password']){
        $count=2;
    }
}

}
if($count==2){
    include 'page2.php';
}
else if($count==1){
    echo "<script>alert('Incorrect details or unregistered user');</script>";
    include 'page1.html';
}
else if($count2==0){
    echo "<script>alert('Incorrect Username and password');</script>";
    include 'page1.html';
}
}
?>
