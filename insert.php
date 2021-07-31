<?php
	require_once'conn.php';
	if(ISSET($_POST['insert'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		
		
		$query="INSERT INTO `member` (firstname, lastname, username) VALUES('$firstname', '$lastname', '$username')";
		
		$conn->exec($query);
		
		header("location:index.php");
	}
?>