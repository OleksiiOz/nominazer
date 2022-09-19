<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

  if(!empty($_POST)) {
    $sql = "INSERT INTO `users` (`username`, password) VALUES ('" . $_POST['username'] . "','" . $_POST['password'] . "');";
    if (mysqli_query($conn, $sql)) {
      echo "INSERT";
      header('Location: /');
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>

  <div class="wrap-login100">
    <form action="#" method="POST" class="login100-form validate-form">
      <span class="login100-form-title p-b-34 p-t-27">Register</span>
      <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="text" name="username" placeholder="Username">
      </div>
      <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password">
      </div>
      <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">Register</button>
      </div>
    </form>
  </div>

<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>


<!-- <div class="container text-center">
<main class="form-signin w-100 m-auto">
  <form action="#" method="POST">
    <h1 class="h3 mb-3 fw-normal">Please register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingName" placeholder="Username" name="name">
      <label for="floatingInput">User name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <!-- <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label> -->
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
</main>
</div>

 -->