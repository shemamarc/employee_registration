<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
    <fieldset style="width: 200px; margin-top: 100px;">
    
    <form action="" method="POST">
        <?php 
        require "connect.php";
        $x = $_GET['updateid'];
        $query = "SELECT * FROM user WHERE id='$x' ";
        $result  = mysqli_query($connect,$query);
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" value=<?php echo $rows['email']?>><br>
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter your name" value=<?php echo $rows['name']?>><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" value=<?php echo $rows['password']?>><br><br>
        <?php
        }
        ?>


        <button type="submit" name="btn">update</button>
    </form>

<?php
include 'connect.php';
$updateid=$_GET['updateid'];
if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=$_POST['password'];
$update="UPDATE user SET email='$email', name='$name' , password='$password' WHERE id=$updateid";
$query=mysqli_query($connect,$update);
    header("location:display.php");
}


?>

        
    </fieldset>
    </center>
</body>
</html>