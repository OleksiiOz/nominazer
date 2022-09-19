<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

	$sql = "DELETE FROM `list` WHERE user_id = " . $currentUser;
	if (mysqli_query($conn, $sql)) {
	    echo "DELETE";
		header('Location: /list.php');
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>