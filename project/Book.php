<html>
    <head><title>booking</title>
    <style>
        body{
            overflow-y: hidden; 
            overflow-x: hidden;
        }
        .button:hover {
      background-color:#fdfeff;
     
  }


    </style>
    </head>

    <body style="background-color: rgb(123, 121, 198);">
       
        <div style="border-radius:30px;
        width:100%;height:30px;background-color: rgb(5, 5, 5);"></div>
        <div width="100%">
            <br>
            <div style="width:100%;height:540px;background-color: rgb(123, 121, 198);float: left;padding: 10px;">
                <form style="width:380px;height:auto;border:2px none black;border-radius:10px;padding: 10px 20px
20px;background-color:rgb(5, 5, 5);margin: 70px 0px 0px 430px;" name="name1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" align="center">

<tt align="center" style="color:rgb(255, 255, 255);font-size:26px;">BOOK</tt>
<table style="padding:20px;" cellpadding="5">
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">Court No  </tt></label></td>
<td style="color:rgb(255, 255, 255);">:
<select name="ab" size=1 style="color:rgb(0, 0, 0);border-radius:4px;" single>
  <option value="S1">S1</option>
  <option value="S2">S2</option>
  <option value="V1">V1</option>
  <option value="V2">V2</option>
  <option value="T1">T1</option>
  <option value="T2">T2</option>
  <option value="C1">C1</option>
  <option value="C2">C2</option>
  <option value="F1">F1</option>
</select>
</td>
</tr>
<tr>
    <td><label><tt class="wt" style="color:rgb(255, 255, 255);">User Name*  </tt></label></td>
    <td style="color:rgb(255, 255, 255);">:<input  type="text" placeholder="Enter your username" name="tb1" style="color:rgb(0, 0, 0);border-radius:4px;
    border:1px solid black"></td>
</tr>
<tr>
    <td><label><tt class="wt" style="color:rgb(255, 255, 255);">Name*  </tt></label></td>
    <td style="color:rgb(255, 255, 255);">:<input  type="text" placeholder="Enter your name" name="tb2" style="color:rgb(0, 0, 0);border-radius:4px;
    border:1px solid black"></td>
</tr>
<tr>
        <td><label><tt class="wt" style="color:rgb(255, 255, 255);">From time*  </tt></label></td>
        <td style="color:rgb(255, 255, 255);">:<input  type="text" placeholder="HH:MM AM/PM" name="tb3" style="color:rgb(0, 0, 0);border-radius:4px;
        border:1px solid black"></td>
</tr>
<tr>
    <td><label><tt class="wt" style="color:rgb(255, 255, 255);">To time*  </tt></label></td>
    <td style="color:rgb(255, 255, 255);">:<input type="text" placeholder="HH:MM AM/PM" name="tb4" style="color:rgb(0, 0, 0);border-radius:4px;
    border:1px solid black"></td>
    </tr>
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">Date*  </tt></label></td>
<td style="color:rgb(255, 255, 255);">:<input  type="text" placeholder="DD/MM/YYYY" name="tb5" style="color:rgb(0, 0, 0);border-radius:4px;
border:1px solid black"></td>
</tr>

</table>
<p class="abc" id="Doc"></p>
<div align="center">
<input type="submit" value="Submit" name="b1" style="padding:10px;width:80px;color:rgb(255, 255, 255);
background:rgb(1, 1, 1);border-radius:10px;border: 1px solid rgb(123, 121, 198);">
</div>
</form>
</div>

            <div style="border-radius:30px;
        width:100%;height:30px;background-color: rgb(10, 10, 10);float: left;"></div>
        </div>
        <br>
        
<?php
$con=mysqli_connect("cloud.c7sovmb4ucbm.ap-south-1.rds.amazonaws.com","cloud","cloud123");
session_start();
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"cloudcomputing");
$result = mysqli_query($con,"SELECT * FROM register");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$a=($_POST["ab"]);
//echo $a;
$a1=($_POST["tb1"]);
$a2=($_POST["tb2"]);
$a3=($_POST["tb3"]);
$a4=($_POST["tb4"]);
$a5=($_POST["tb5"]);
$count=0;
$count1=0;
if($a!="" && $a1!="" && $a2!="" && $a3!="" && $a4!="" && $a5!=""){
    $count1=1;
}
else{
    echo "<script>alert('Fill all details');</script>";
}
while($row = mysqli_fetch_array($result))
{
if($a1==$row['username']){
    $count=1;
    break;
}
}
if($count==1 && $count1==1){
        echo "<script>alert('Succesfully inserted');</script>";
        $result1 = mysqli_query($con,"INSERT INTO booking (courtno,username,name,fromtime,totime,date)
    VALUES ('$a','$a1','$a2','$a3','$a4','$a5');");
    header("Location: page2.php");
}
if($count==0 && $count1==1){
    echo "<script>alert('Entered incorrect username');</script>";
}
}

?>
    </body>

</html>
