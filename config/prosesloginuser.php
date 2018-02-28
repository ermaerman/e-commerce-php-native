<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($connect));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$username  = $data['username'];
	$password  = $data['password'];

	if ($jlhrecord > 0){

		// jika Username dan password ada didalam database daftarkan session
		session_start();
		$_SESSION['username']  = $username;
		$_SESSION['password']  = $password;
		$_SESSION['id']        = session_id();
		

		echo "<br><br><br><strong><center><i>You have successfully logged in";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../user/index.php?content=home">'; 
}

	else
	echo "<br><br><br><strong><center><i>Sorry you're failed to login, maybe the username or password you entered is wrong.<br>Please fill your data with correctly";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "3; URL=../index.php?content=home">';  
?>