<?php
	include 'connect.php';
	session_start();
	if(isset($_POST['signup']))
	{
		$name = $_POST['name'];
		$name = stripcslashes($name);

		$email = $_POST['email'];
		$email = stripcslashes($email);

		$username = $_POST['username'];
		$username = stripcslashes($username);

		$password = $_POST['password'];
		$password = stripcslashes($password);

		$nick = $_POST['nick'];
		$nick = stripcslashes($nick);


		$q = "INSERT into students (name, email, username, password, pic, nick) VALUES ('$name','$email','$username','$password','../img/user.jpg', '$nick')";

		mysqli_query($con,$q);
		$s = mysqli_affected_rows($con);
		echo $s.' user is successfully registerd </br>';
		$_SESSION['username'] = $username;
		echo 'redirecting to <a href="profile.php">Profile</a> page!';
		header('Refresh: 1;url=profile.php');
	}

	mysqli_close($con);
?>