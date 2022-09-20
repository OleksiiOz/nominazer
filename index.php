<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

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

	<!-- СГЕНРИРОВАННОЕ СЛОВО -->
	<div class="wrap-login100 generate-word">
		<form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/add_title.php" method="POST">
			<button class="block like" name="1" type="submit">
				<i class="bi bi-emoji-smile"></i>
			</button>
			<div class="menu">
				<a id="option" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/options.php">
					<i class="bi bi-gear"></i>
				</a>
				<div class="result">
					<h2 name="title">TEST</h2>
					<input type="text" name="title" value="TEST">
				</div>
				<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/list.php">
					<i class="bi bi-card-checklist"></i>
				</a>
			</div>
			<button class="block bad" name="0" type="submit">
				<i class="bi bi-emoji-frown"></i>
			</button>
		</form>
	</div>

	<?php 
	  require $_SERVER['DOCUMENT_ROOT'].'/add_options.php';
	?>

	<script>
		var textElement = document.querySelector(".result h2");
		var textInput = document.querySelector(".result input");
		let letterCount = '<?php echo $row['letter_count']?>'; // var wordLength = 6;

		var a = ["e", "y", "u", "i", "o", "a"];
		var b = ["q", "w", "r", "t", "p", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"];

		function randomInteger(min, max) {
		  var rand = min + Math.random() * (max + 1 - min);
		  return Math.floor(rand);
		}

		function randomLetter(a_b) {
			return a_b[randomInteger(0, a_b.length-1)];
		}

		//переделал на кнопку и количество букв выбраных пользователем
		function randomName(length) {
			length = letterCount;
			var word = "";
			for(var i=0; i<length; i++) {
		  	if (randomInteger(0, 1) == 1) {
		  		word += randomLetter(b);
		  	} else {
		  		word += randomLetter(a);
		  	}	
		  	console.log(word);
		  }
		  textElement.innerText = word;
		  textInput.value = word;		  
		}
		randomName();

		/*Добавляем назваие в список*/
		// let addToListLike = document.querySelector('.like');
		// let addToListBad = document.querySelector('.bad');

		// addToListLike.addEventListener('click', addToList);
		// addToListBad.addEventListener('click', addToList);

		// function addToList() {
		// 	window.location.href = '/add_title.php';
		// }
	</script>

<?php 
	}
?>

<?php 
	require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>