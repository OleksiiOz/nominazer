<!-- OPTIONS -->
<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

	if(!empty($_POST)) {
		$sql = "UPDATE `options` SET `letter_count` = '".$_POST['letter-count']."', `word_count` = '".$_POST['word-count']."', `language` = '".$_POST['language']."' WHERE `options`.`user_id` =".$currentUser;
		if (mysqli_query($conn, $sql)) {
			header('Location: /');
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
  require $_SERVER['DOCUMENT_ROOT'].'/add_options.php';

?>	

	<div class="wrap-login100 options">
		<h2 class="login100-form-title p-b-50 p-t-20">HI <?php echo $user['username']; ?>!   <a class="txt1 p-l-20" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/logout.php"><i class="bi bi-door-open-fill"></i></a></h2>
    <form action="#" method="POST" class="login100-form validate-form">
      <div class="wrap-input100 validate-input" data-validate="">
        <input class="input100" type="number" id="letter-count" name="letter-count" min="3" max="24" required value="<?php echo $row['letter_count']; ?>">
        <span class="focus-input100" data-placeholder="Letter count"></span>
      </div>
      <div class="wrap-input100 validate-input" data-validate="">
        <input class="input100" list="count" name="word-count" required value="<?php echo $row['word_count']; ?>">
        <span class="focus-input100" data-placeholder="Word count"></span>
        <datalist id="count">
	   			<option value="1">
	    		<option value="2">
	    		<option value="3">
				</datalist>
      </div>          
      <div class="wrap-input100 validate-input" data-validate="">
        <input class="input100" list="languages" name="language" required value="<?php echo $row['language']; ?>">
        <span class="focus-input100" data-placeholder="Language"></span>
          <datalist id="languages">
				    <option value="EN">
				    <option value="UA">
				  </datalist>
      </div>
      <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="capital-letters">
        <label class="label-checkbox100" for="ckb1">Capital letters</label>
      </div>
      <div class="container-login100-form-btn">
	    	<button id="generate" class="login100-form-btn" type="submit">GENERATE</button>
			</div>
    </form>
<!--     <div class="container-login100-form-btn">
	    <button id="generate" class="login100-form-btn" type="submit">GENERATE</button>
		</div> -->
		<div class="text-center p-t-50">
			<a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/list.php">List</a>			
		</div>
	</div>

<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>