<?php
	$email = $_POST[email];
	$password = md5($_POST[password]);
	$conn = mysqli_connect("localhost","root","Su900102","soso");
	$sql = "select * from member";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)) {
		if($row[email]==$email && $row[password]==$password){
			session_start();
			$_SESSION["id"]=$row[id]; 
			echo "<script>window.location.href='/';</script>";
		}
	}
	if(!isset($_SESSION[id])){
		echo "<script>alert('帳號或密碼錯誤！');</script>";
		echo "<script>window.location.href='/login';</script>";
	}
?>
