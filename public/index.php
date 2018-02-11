<?php
 	require_once('../private/init.php');
 	$user = User::find_all();

 	print_r($user);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP OOP With Database Connection</title>
</head>
<body>	
	<h1>Test Crud</h1>
</body>
</html>