<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'spt';


/*$server = 'localhost';
   $user = 'ah9Pm9';
   $pass = '5AW2tY6KuZUmPf5';
   $dbname = 'sp_transoprt';*/

$con = mysqli_connect($server, $user, $pass, $dbname) or DIE('Connection to host is failed, perhaps the service is down!');

function GetAllA_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	$result_array = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$result_array[] = $row;
	}

	return $result_array;
}


function GetRow_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}



function GetOne_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	$row = array_values($row);
	return $row[0];
}

function GetAll_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	$result_array = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$result_array[] = $row;
	}
	return $result_array;
}
function GetCol_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	$result_array = array();
	while ($row = mysqli_fetch_array($result)) {
		$result_array[] = $row[0];
	}
	return $result_array;
}
function Execute_left($sql, $con)
{
	$result = mysqli_query($con, $sql);
	if (!$result) {
		return 0;
	} else {
		return 1;
	}
}


function print_array_left($array, $exit = false)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	if ($exit) {
		exit();
	}
}


?>