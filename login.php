<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';

  if(!empty($_POST)) {
    $sql = "SELECT * FROM `users` WHERE `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."'";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();

// сохранеие сессии в ккуки
    if ($user) {
      if(isset($_POST['remember'])) {
        setcookie('user_id', $user['id'], time()+60*60*24*30, '/');
      } else {
        $_SESSION['user_id'] = $user['id'];
      }
      header('Location: /');
    } else {
      $_SESSION['user_id'] = null;
      setcookie('user_id', '', 0, '/');
    }
  }
?>

      <div class="wrap-login100">
        <form action="#" method="POST" class="login100-form validate-form">
          <!--<span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>-->
          <span class="login100-form-title p-b-34 p-t-27">Log in</span>
          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
          </div>
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1">Remember me</label>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">Login</button>
          </div>
        </form>
      </div>

<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>