<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
   
<button style="margin-top: 80px; margin-left: 50px;">
    <a href="index.php">Add user</a></button><br><br>


<?php
include 'connect.php';

$result = mysqli_query($connect,"SELECT * FROM user");
if ($result->num_rows > 0) {
	echo "<table border='1'>"; 
    echo "<tr><th>ID</th><th>Email</th><th>Name</th><th>password</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $id=$row['id'];
        $email=$row['email'];
        $name=$row['name'];
        $password=$row['password']; 
        echo "<tr>
        <th scope='row'>$id</th>
        <td>".$row['email']."</td>
        <td>".$row['name']."</td>
        <td>".$row['password']."</td>
        <td>
        <button><a href='delete.php?deleteid=$id'>Delete</a></button>
        <button><a href='update.php?updateid=$id'>update</a></button>
        </td>
        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}
?>

</body>
</html>