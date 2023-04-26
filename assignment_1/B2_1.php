<?php
session_start();

if(isset($_POST['submit'])) {
  $_SESSION['eno'] = $_POST['eno'];
  $_SESSION['ename'] = $_POST['ename'];
  $_SESSION['address'] = $_POST['address'];

  header('Location: B2_2.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Details</title>
</head>
<body>
  <h1>Employee Details</h1>
  <form method="post">
    <label for="eno">Eno:</label>
    <input type="text" name="eno" id="eno"><br><br>

    <label for="ename">Ename:</label>
    <input type="text" name="ename" id="ename"><br><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address"><br><br>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
