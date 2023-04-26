<?php
session_start();

$eno = $_SESSION['eno'];
$ename = $_SESSION['ename'];
$address = $_SESSION['address'];
$basic = $_SESSION['basic'];
$da = $_SESSION['da'];
$hra = $_SESSION['hra'];
$total = $basic + $da + $hra;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Information</title>
</head>
<body>
  <h1>Employee Information</h1>
  <p>Eno: <?php echo $eno; ?></p>
  <p>Ename: <?php echo $ename; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <p>Basic: <?php echo $basic; ?></p>
  <p>DA: <?php echo $da; ?></p>
  <p>HRA: <?php echo $hra; ?></p>
  <p>Total: <?php echo $total; ?></p>
</body>
</html>
