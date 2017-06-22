<?php


function fConnectToDatabase(){
	$db= new PDO('mysql:localhost:3306=mysql;dbname=dvd', 'root', '##DerpDerp90');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	echo 'ok';
	return $db;
	}
?>