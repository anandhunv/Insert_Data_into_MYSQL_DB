<!--to link php page-->
<?php
include("connection.php");

if(isset($_POST['submit'])){  //isset used to check set or not set //we used "method -post" in the form so we ue $_post in this to access data in the form
//storing entered data into a variable
$email=$_POST['email'];
$password=$_POST['password'];
//insert these datas ino database and userquery 
$sql="INSERT INTO Login(email,password)VALUES('$email','$password')";//in values ,we give the variable that created up step
//to execute this
$result=mysqli_query($connect,$sql);//$connect variable used in connection.php and above variable

if($result){
  echo'<script>alert("succesfully inserted")</script>';
}
else{
  echo'<script>alert("failed to inserted")</script>';
}

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT DATABASE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
  <h1>Login</h1>
        <!-- form -->
      <form action=""  method="post"><!--onsubmit="return validate()-->
        <!-- Email -->
        <label for="">Email:</label>
        <input type="email" name="email" placeholder="Enter Your Email" />
        <br/>
        <br/>
        <!-- password -->
        <label for="">Password:</label>
        <input type="password" name="password" id="password" />
        <br/>
        <br/>
         <!-- Button -->
         <button type="submit" name="submit">Register</button>
        <br>
        <!-- credit -->
        <a href="https://github.com/nvanxndhu">&copy;anandhunv</a>
 </form>
 </div>
<script src="check.js"></script>
</body>
</html>