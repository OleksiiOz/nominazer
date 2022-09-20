<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';
	if(!empty($_POST)) {
		$sql = "INSERT INTO `list` (`user_id`, `title`, `liked`) VALUES ('".$currentUser."', '".$_POST['title']."', '1')";
		if (mysqli_query($conn, $sql)) {
		    echo "INSERT";
		    header('Location: /');
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
?>