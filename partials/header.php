<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/configs/db.php';

	if(!isset($_SESSION)) {
    	session_start();
  	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NOMINAZER</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/css/main.css" class="__web-inspector-hide-shortcut__">

	<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/style.css">
</head>
<body>
	<!-- login  -->
	<div class="limiter">
		<div class="container-login100"> 

<?php 
	if (isset($_SESSION['user_id'])) {
	    $sql = "SELECT * FROM users WHERE id=". $_SESSION['user_id'];
	    $result = mysqli_query($conn, $sql);
	    $user = $result->fetch_assoc();
	    $currentUser = $_SESSION['user_id'];
	} else if (isset($_COOKIE['user_id'])) {
	    $sql = "SELECT * FROM users WHERE id=". $_COOKIE['user_id'];
	    $result = mysqli_query($conn, $sql);
	    $user = $result->fetch_assoc();
	    $currentUser = $_COOKIE['user_id'];
    } 
 ?>