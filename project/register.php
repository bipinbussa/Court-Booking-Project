<html>
    <head><title>Register</title>
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
            <div style="padding:10px;width:40%;height:530px;background-color:rgb(123, 121, 198);
            color:rgb(8, 8, 8);float:left;">
            <h4 style="font-size: 80px;font-weight: 900;">
                Play.<br>
            try-it-yourself.<br>
            get-it-yourself.
            </h4>
            <h4>-Book your court online to play your favourite game.</h4>
            </div>
            <div style="width:50%;height:400px;background-color: rgb(123, 121, 198);float: left;padding: 10px;">
               
                <form style="width:380px;height:auto;border:2px none black;border-radius:10px;padding: 10px 20px
20px;background-color:rgb(5, 5, 5);margin: 80px 0px 0px 150px;" name="name1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" align="center">

<tt align="center" style="color:rgb(255, 255, 255);font-size:26px;">REGISTER</tt>
<table style="padding:20px;" cellpadding="5">
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">User name*  </tt></label></td>
<td style="color:rgb(255, 255, 255);">:<input  type="text" name="tb1" style="color:rgb(0, 0, 0);border-radius:4px;
border:1px solid black"></td>
</tr>
<tr>
    <td><label><tt class="wt" style="color:rgb(255, 255, 255);">Name*  </tt></label></td>
    <td style="color:rgb(255, 255, 255);">:<input  type="text" name="tb2" style="color:rgb(0, 0, 0);border-radius:4px;
    border:1px solid black"></td>
</tr>
<tr>
        <td><label><tt class="wt" style="color:rgb(255, 255, 255);">Eamil ID*  </tt></label></td>
        <td style="color:rgb(255, 255, 255);">:<input  type="text" name="tb3" style="color:rgb(0, 0, 0);border-radius:4px;
        border:1px solid black"></td>
</tr>
<tr>
    <td><label><tt class="wt" style="color:rgb(255, 255, 255);">Phone number*  </tt></label></td>
    <td style="color:rgb(255, 255, 255);">:<input type="text" name="tb4" style="color:rgb(0, 0, 0);border-radius:4px;
    border:1px solid black"></td>
    </tr>
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">Desired Password*   </tt></label></td>
<td style="color:rgb(255, 255, 255);">:<input  type="text" name="tb5" style="color:rgb(0, 0, 0);border-radius:4px;
border:1px solid black"></td>
</tr>

</table>
<p class="abc" id="Doc"></p>
<div align="center">
<br>
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
$a1=($_POST["tb1"]);
$a2=($_POST["tb2"]);
$a3=($_POST["tb3"]);
$a4=($_POST["tb4"]);
$a5=($_POST["tb5"]);
$count=0;
$count1=0;
if($a1!="" && $a2!="" && $a3!="" && $a4!="" && $a5!=""){
    $count1=1;
}
else{
    echo "<script>alert('Fill all details');</script>";
}
if($count1==1){
    if(strlen($a5)!=8){
        echo "<script>alert('password must be equal to 8 characters including lowercase,uppercase');</script>";
    }
    else{
        $pattern='/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])\S*$/';
        if(preg_match($pattern,$a5)){
            $count1=2;
            echo "<script>alert('password accepted');</script>";
        }
    }
}
while($row = mysqli_fetch_array($result))
{
if($a1==$row['username']){
    $count=1;
    echo "<script>";
    echo "alert('username already exists')";
    echo "</script>";
    break;
}
}
if($count!=1 && $count1==2){
        echo "<script>alert('Succesfully registered');</script>";
        $result1 = mysqli_query($con,"INSERT INTO register (username,name,emailid,phoneno,password)
    VALUES ('$a1','$a2','$a3','$a4','$a5');");
}
if($count!=1 && $count1==2){
    
       header("Location: page1.html");
}
else{
    echo "<script>alert('password must be equal to 8 characters including special characters,lowercase,uppercase');</script>";
}
}

?>
    </body>

</html>
