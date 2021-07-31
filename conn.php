<?php
	$conn=new SQLite3('db/db_member') or die("¡No se puede abrir la base de datos!");
	$query="CREATE TABLE IF NOT EXISTS `member`(mem_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname TEXT, lastname TEXT, username TEXT, password TEXT)";
	
	$conn->exec($query);
?>