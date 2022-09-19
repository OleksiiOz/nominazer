<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

	// if (isset($_SESSION['user_id'])) {
	//     $sql = "SELECT * FROM users WHERE id=". $_SESSION['user_id'];
	//     $result = mysqli_query($conn, $sql);
	//     $user = $result->fetch_assoc();
	//     $currentUser = $_SESSION['user_id'];
	// } else if (isset($_COOKIE['user_id'])) {
	//     $sql = "SELECT * FROM users WHERE id=". $_COOKIE['user_id'];
	//     $result = mysqli_query($conn, $sql);
	//     $user = $result->fetch_assoc();
	//     $currentUser = $_COOKIE['user_id'];
 //    } 
    if(!isset($user)) {
?>

	<div class="wrap-login100">
		<form class="login100-form validate-form">
			<h1 class="login100-form-title p-b-70 p-t-50">Nominazer</h1>
			<h2 class="login100-form-title p-b-20 p-t-20">HELLOW user!</h2>
			<div class="text-center p-t-20">
				<a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/login.php">LOG IN</a>
			</div>
			<h2 class="login100-form-title p-b-10 p-t-20">or</h2>
			<div class="text-center p-t-10">
				<a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/register.php">REGISTER</a>
			</div>
		</form>
	</div>

<?php 
	} else {
?>
	<!-- OPTIONS -->
	<div class="wrap-login100 options">
		<h2 class="login100-form-title p-b-50 p-t-20">HI <?php echo $user['username']; ?>!   <a class="txt1 p-l-20" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/logout.php"><i class="bi bi-door-open-fill"></i></a></h2>
        <form action="#" method="get" class="login100-form validate-form">
          <div class="wrap-input100 validate-input" data-validate="">
            <input class="input100" type="number" name="letter-count" placeholder="Letter count" min="3" max="24" required>
          </div>
          <div class="wrap-input100 validate-input" data-validate="">
            <input class="input100" list="count" name="word-count" placeholder="Word count" required>
            <datalist id="count">
			    <option value="1">
			    <option value="2">
			    <option value="3">
			</datalist>
          </div>          
          <div class="wrap-input100 validate-input" data-validate="">
            <input class="input100" list="languages" name="language" placeholder="Language" required>
              <datalist id="languages">
			    <option value="EN">
			    <option value="UA">
			  </datalist>
          </div>
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="capital-letters">
            <label class="label-checkbox100" for="ckb1">Capital letters</label>
          </div>
        </form>
        <div class="container-login100-form-btn">
		    <button id="generate" class="login100-form-btn" type="submit">GENERATE</button>
		</div>
		<div class="text-center p-t-50">
			<a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/list.php">List</a>			
<!-- 			<a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/clean_list.php">Clean list</a>
 -->		</div>
	</div>

	<!-- СГЕНРИРОВАННОЕ СЛОВО -->
	<div class="wrap-login100 generate-word">
		<div class="block like">
			<i class="bi bi-emoji-smile"></i>
		</div>
		<div class="menu">
			<a href="#">
				<i class="bi bi-gear"></i>
			</a>
			<div class="result">
				<h2>TEST</h2>
			</div>
			<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/list.php">
				<i class="bi bi-card-checklist"></i>
			</a>
		</div>
		<div class="block bad">
			<i class="bi bi-emoji-frown"></i>
		</div>
	</div>

		<!-- LIST -->
	

<?php 
	}
?>

<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>