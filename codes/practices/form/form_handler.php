<?php 
  $username = $usernameErr = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['username'])) {
      $usernameErr = "Ow babaca, bota uma parada la?";
    } else {
      $username = $_POST['username'];
      echo $username;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .error {
        display: flex;
        color: red;
      }
    </style>
  </head>
  <body>
    <form method="post" action="form_handler.php">
      <input name="username" type="text" placeholder="username" />
      <span class="error"><?php echo $usernameErr; ?></span>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>

