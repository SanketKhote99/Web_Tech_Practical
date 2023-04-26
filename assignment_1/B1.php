<?php
session_start();

if(isset($_POST['submit'])) {
  if($_POST['username'] == 'myusername' && $_POST['password'] == 'mypassword') {
    $_SESSION['loggedIn'] = true;
    header('Location: welcome.php');
    exit;
  } else {
    if(isset($_SESSION['loginAttempts'])) {
      $_SESSION['loginAttempts']++;
    } else {
      $_SESSION['loginAttempts'] = 1;
    }

    if($_SESSION['loginAttempts'] >= 3) {
      echo 'You have exceeded the maximum number of login attempts.';
      exit;
    } else {
      $remainingAttempts = 3 - $_SESSION['loginAttempts'];
      echo "Invalid username or password. You have $remainingAttempts attempts remaining.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
