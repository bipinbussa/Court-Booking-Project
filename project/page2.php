<html>
<head><title>MainPage-2</title>
<style>
    body{
        background-color: rgba(123, 121, 198);
        
  
    }
   
.grid-container {
  display: grid;
  grid-template-columns: auto 450px auto;
  grid-gap: 8px;
  background-color: rgba(123, 121, 198);
  
}

.grid-container > div {
  background-color: rgba(123, 121, 198, 0.8);
  text-align: center;
  padding: 20px 0px;
  font-size: 30px;
}
.but{
    font-style:normal;
    font-size:medium;
    width: 150px;
    color:rgb(0, 0, 0);
    background:rgb(123, 121, 198);
    border-radius:10px;
    border: 1px solid rgb(0, 0, 0);
}
</style>
</head>
<body>

<div class="grid-container">
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="f.jpg" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">F1</h4> 
    <input type="button" class="but" value="Check availability" onclick="location.href='F1.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"> </div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="b.jpg" width="50%" height="50%">
    <h4 style="color:#ffffff;text-align: center;" >S1</h4>
    <input type="button" class="but" value="Check availability" onclick="location.href='B1.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"> </div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="b.jpg" width="50%" height="50%">
    <h4 style="color:#ffffff;text-align: center;">S2</h4> 
    <input type="button" class="but" value="Check availability" onclick="location.href='B2.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"> </div>  
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="t.png" width="50%" height="50%">
    <h4 style="color:#ffffff;text-align: center;">T1</h4>
    <input type="button" class="but" value="Check availability" onclick="location.href='T1.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'">  </div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="t.png" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">T2</h4> 
    <input type="button" class="but" value="Check availability" onclick="location.href='T2.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"></div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="c.jpg" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">C1</h4>
    <input type="button" class="but" value="Check availability" onclick="location.href='C1.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"> </div>  
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="c.jpg" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">C2</h4> 
    <input type="button" class="but" value="Check availability" onclick="location.href='C2.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"></div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="v.jpg" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">V1</h4>
    <input type="button" class="but" value="Check availability" onclick="location.href='V1.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"> </div>
  <div style="height:300px;border-radius:10px;background-color: rgb(5, 5, 5);">
    <img src="v.jpg" width="50%" height="50%"> 
    <h4 style="color:#ffffff;text-align: center;">V2</h4> 
    <input type="button" class="but" value="Check availability" onclick="location.href='V2.php'">
    <input type="button" class="but" value="Book" onclick="location.href='Book.php'"></div>
</div>
<div align="center">
<br>
<input type="button" value="LOGOUT" onclick="location.href='logout.php'" class="button" name="b1" style="padding:10px;width:80px;color:rgb(255, 255, 255);
background:rgb(1, 1, 1);border-radius:10px;border: 1px solid rgb(123, 121, 198);">
</div>
<?php
  function myfunc() {
    echo 'I just ran a php function';
  }

  if (isset($_GET['ass'])) {
    runMyFunction();
  }
?>
</body>

</html>
