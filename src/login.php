<?php
function loginHTML() {
	require 'src/connect.php';

	if(isset($_POST['log_username'])) {
		$username=$_POST['log_username'];
		$password=$_POST['log_password'];
		$_SESSION['username'] = $username;

		$sql="select * from Person where name='".$username."'AND password='".$password."' limit 1";
		$result=$conn->query($sql);
		if($result->num_rows==1) {
			header("Location:src/homepage.php");
			exit();
		} else {
			echo "You Have Entered Incorrect Password";
			exit();
		}
	}
}
?>