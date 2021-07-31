<?php
	require_once 'conn.php';
	function randPass($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return $gen;
		}
		
	$query=$conn->query("SELECT * FROM `member`") or die("¡No se pudo recuperar la fila!");
	while($fetch=$query->fetchArray()){
		$id = $fetch['mem_id'];		
		$pass = randPass(12, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');	
		
		$conn->exec("UPDATE `member` SET `password` = '$pass' WHERE `mem_id` = '$id'");
	}	
	header("location:index.php");
?>