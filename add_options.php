<?php
	$sql = "SELECT * FROM options WHERE user_id = $currentUser";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  if (!isset($row)) {
	  	$sql = "SELECT * FROM options WHERE user_id = 0"; // 0 = default
	    $result = $conn->query($sql);
	   	$row = $result->fetch_assoc();
   		$sql = "INSERT INTO `options` (`user_id`, `letter_count`, `word_count`, `language`) VALUES ('" . $currentUser . "','" .$row['letter_count']. "','".$row['word_count']."','".$row['language']."')";
	    $result = $conn->query($sql);
	  }
?>