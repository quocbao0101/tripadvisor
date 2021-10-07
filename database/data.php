<?php
	$host = "localhost";
	$username = "root";
	$pass = "";
	$db = "tripadvisor";
	$conn = mysqli_connect($host,$username,$pass,$db);
	if(!$conn)
	{
		die("Không thể kết nối tới CSDL").mysqli_connect_error();
	} 
?>