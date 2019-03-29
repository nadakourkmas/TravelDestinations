<?php
	/*
	function OpenCon() {
		$dbhost = "localhost";
		$dbuser = "root"; $dbpass = "travel"; $db = "travel_destinations";
		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
		return $conn;
	}
		
	function CloseCon($conn) {
		$conn -> close(); 
	}
	how to check connection on other pages:
	include 'connect.php';
	$conn = OpenCon();
	echo "Connected Successfully"; CloseCon($conn);
	*/

	$dbhost = "lgg2gx1ha7yp2w0k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$dbuser = "t0iox4gdaafxsdul"; $dbpass = "bclca4gzl99cywrz"; $db = "jdokw586fsalpqo5";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>
