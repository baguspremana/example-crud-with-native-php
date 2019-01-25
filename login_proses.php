<?php 
	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql  = "SELECT * FROM tb_user where username='$user' and password='$pass'";		
	$login = mysqli_query($con, $sql);
	$result = mysqli_num_rows($login);
	if($result>0){
		$user = mysqli_fetch_array($login);
		session_start();
		$_SESSION['username'] = $user['username'];
		header("location:dataManipulasi.php");
	}else{
		header("location:login.php");
	}
?>