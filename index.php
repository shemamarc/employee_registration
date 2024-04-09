<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
    <fieldset style="width: 200px; margin-top: 100px;">
    
    <form action="" method="post">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password"><br><br>

        <button type="submit" name="btn">Submit</button>
    </form>

<?php
include 'connect.php';
if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=$_POST['password'];
mysqli_query($connect, "INSERT INTO user VALUES('','$email','$name','$password')");
    header("location:display.php");
}


?>

        
    </fieldset>
    </center>
</body>
</html>