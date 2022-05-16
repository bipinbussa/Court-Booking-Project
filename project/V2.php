<html>
        <body style="background:rgb(123, 121, 198);">
        <input type="submit" onclick="location.href='page2.php'" value="Go back" name="b1" 
style="padding:10px;width:80px;color:rgb(255, 255, 255);background:rgb(1, 1, 1);
border-radius:10px;border: 1px solid rgb(123, 121, 198);">
<br>
<h1 style="color:rgb(0,0,0);">The Current Bookings of court <em>V2</em> is:</h1>
<br>
</body>
<?php
$con=mysqli_connect("cloud.c7sovmb4ucbm.ap-south-1.rds.amazonaws.com","cloud","cloud123");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"cloudcomputing");
$result = mysqli_query($con,"SELECT * FROM booking where courtno='V2'");

//echo file_get_contents("page2.html");
echo "<table border='1' width=100% padding=10 cellpadding=8px cellspacing=5px >
        <tr>
        <th>CourtNumber</th>
        <th>Name</th>
        <th>From time</th>
        <th>To time</th>
        <th>Date</th>
        </tr>";
while($row = mysqli_fetch_array($result))
{
        echo "<tr>";
        echo "<td>" . $row['courtno']. "</td>";
        echo "<td>" . $row['name']. "</td>";
        echo "<td>" . $row['fromtime'] . "</td>";
        echo "<td>" . $row['totime']. "</td>";
        echo "<td>" . $row['date']. "</td>";
        echo "</tr>"; 
}
echo "</table>"; 

?>
</html>
