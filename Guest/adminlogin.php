<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <h1>ADMIN LOGIN</h1>
    <form class="login-form" method="post" action="adminloginaction.php">
      <input type="text" name="txtusername" placeholder="username"/>
      <input type="password" name="txtpassword" placeholder="password"/>
      <button>LOGIN</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script src='adminlogin.js'></script>
</body>
</html>