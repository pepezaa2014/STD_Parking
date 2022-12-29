<?php
	$conn = new mysqli ('localhost', 'root', '', 'std_parking');
		if( $conn -> connect_errno){
			die("Connection Failed". $conn->connect_error);
		}
		$conn->query("set names utf8");
?>