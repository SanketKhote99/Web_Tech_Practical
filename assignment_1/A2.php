<?php
if(isset($_POST['submit'])) {
  setcookie('font-style', $_POST['font-style'], time() + 86400);
  setcookie('font-size', $_POST['font-size'], time() + 86400);
  setcookie('font-color', $_POST['font-color'], time() + 86400);
  setcookie('background-color', $_POST['background-color'], time() + 86400);

  header('Location: next_page.php');
  exit;
}

if(isset($_COOKIE['font-style'])) {
  $fontStyle = $_COOKIE['font-style'];
} else {
  $fontStyle = 'Arial';
}

if(isset($_COOKIE['font-size'])) {
  $fontSize = $_COOKIE['font-size'];
} else {
  $fontSize = '16px';
}

if(isset($_COOKIE['font-color'])) {
  $fontColor = $_COOKIE['font-color'];
} else {
  $fontColor = '#000000';
}

if(isset($_COOKIE['background-color'])) {
  $bgColor = $_COOKIE['background-color'];
} else {
  $bgColor = '#FFFFFF';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Preferences</title>
</head>
<body>
  <h1>Change Preferences</h1>
  <form method="post">
    <label for="font-style">Font Style:</label>
    <select name="font-style" id="font-style">
      <option value="Arial" <?php if($fontStyle == 'Arial') echo 'selected'; ?>>Arial</option>
      <option value="Verdana" <?php if($fontStyle == 'Verdana') echo 'selected'; ?>>Verdana</option>
      <option value="Tahoma" <?php if($fontStyle == 'Tahoma') echo 'selected'; ?>>Tahoma</option>
    </select><br><br>

    <label for="font-size">Font Size:</label>
    <select name="font-size" id="font-size">
      <option value="16px" <?php if($fontSize == '16px') echo 'selected'; ?>>16px</option>
      <option value="18px" <?php if($fontSize == '18px') echo 'selected'; ?>>18px</option>
      <option value="20px" <?php if($fontSize == '20px') echo 'selected'; ?>>20px</option>
    </select><br><br>

    <label for="font-color">Font Color:</label>
    <input type="color" name="font-color" id="font-color" value="<?php echo $fontColor; ?>"><br><br>

    <label for="background-color">Background Color:</label>
    <input type="color" name="background-color" id="background-color" value="<?php echo $bgColor; ?>"><br><br>

    <input type="submit" name="submit" value="Save Preferences">
  </form>
</body>
</html>
