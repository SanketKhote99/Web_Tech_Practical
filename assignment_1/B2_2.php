<?php
session_start();

if(isset($_POST['submit'])) {
  $_SESSION['basic'] = $_POST['basic'];
  $_SESSION['da'] = $_POST['da'];
  $_SESSION['hra'] = $_POST['hra'];

  header('Location: B2_3.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Earning Details</title>
</head>
<body>
  <h1>Earning Details</h1>
  <form method="post">
    <label for="basic">Basic:</label>
    <input type="text" name="basic" id="basic"><br><br>

    <label for="da">DA:</label>
    <input type="text" name="da" id="da"><br><br>

    <label for="hra">HRA:</label>
    <input type="text" name="hra" id="hra"><br><br>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
