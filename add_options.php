<?php
	$sql = "SELECT * FROM options WHERE user_id = $currentUser";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  if (!isset($row)) {
	  	$sql = "SELECT * FROM options WHERE user_id = 0"; // 0 = default
	    $result = $conn->query($sql);
	    $row = $result->fetch_assoc();
	  }
?>