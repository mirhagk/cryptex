<?php

if(isset($_POST['user'], $_POST['name'], $_POST['password']))
{
	$uName = $_POST['user']; $name = $_POST['name'];
	$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);;
	// echo $uName; echo $name; echo $pass;

	// Check whether the user already exist
	// $result  = mysql_query("SELECT count(userid) FROM user WHERE username = '$uName'");
	$result  = mysql_query("SELECT pass FROM user WHERE username = '$uName'");
	if ( mysql_num_rows($result) > 0 )
		echo "User Already Exists $uName";

	//Insert User
	$result =  mysql_query("INSERT INTO user (username, pass) VALUES('$uName', '$pass')");
	if ($result)
		echo "Inserted to DB";

}
?>
