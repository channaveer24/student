<?php
session_start();

include("connect-db.php");

$_SESSION = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];

	$user_info = GetRow("Select * from spt_login_tbl where username='" . $myusername . "' and password='" . $mypassword . "' ", $con);

	if ($user_info != '') {
		$_SESSION = $user_info;
		header("location: test_quize.php");
	} else {
		header("location: index.php?err=1");
	}
}
?>