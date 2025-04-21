<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AIUB Library Login</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <div class="wrapper">
    <form action="loginProcess.php" method="POST">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="uname" required>
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="password" name="pass" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <a href="securityQuestion.php">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>