
<!DOCTYPE html>
<html>
<body>
<?php
//
$servername = "localhost:3307";
$username = "root";
$password = "";
//$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php

$user = $_POST['user'];
?>
<b><?php echo $user; ?></b>:<br><br>
<form action="updateuserdos.php" method="POST">
    <input type="hidden" name="user" value="<?php echo $user;?>">
    Password: <input type="password" name="password"><br>
    <input type="submit" value="update">
</form> 

</body>
</html>