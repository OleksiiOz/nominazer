<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/header.php';
?>

  <div class="wrap-login100 list">
    <h2 class="login100-form-title p-b-50 p-t-20">YOUR LIST, <?php echo $user['username']; ?>!</h2>
    <div class="table-container">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>

        <?php 
            $sql = "SELECT * FROM list WHERE user_id = $currentUser AND liked = 1";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $row['title'] ?></td>
            </tr>

        <?php
            }
        ?>

        </tbody>
      </table>
    </div>

    <div class="text-center p-t-50">    
      <a class="txt1 p-r-20" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/clean_list.php">Clean list</a>
      <a class="txt1" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php">Back</a>
    </div>
  </div>
<?php 
  require $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php';
?>