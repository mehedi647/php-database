<?php

require_once('Databaseconnection.php');
$email = $password = $user_id = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$user_id = $_POST['user_id'];
$password = MD5($pwd);
$sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password' AND User Id=$user_id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$user_id = $row["user_id"];
		$email = $row["email"];
		$password = $row ["password"];
		session_start();
		$_SESSION['user_id'] = $usee_id;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
	}
	header("Location: welcome.php");
}
else
{
	echo "Invalid email or password";
}
?>