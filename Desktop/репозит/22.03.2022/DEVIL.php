<?php
	header('Content-Type: text/html; charset=utf-8');
	$name = $_GET['n'];
	$surname = $_GET['s'];
	echo 'Привет '.$name. ' '.$surname; 
?>