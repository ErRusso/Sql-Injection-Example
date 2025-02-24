<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL INJECTION | Login Page</title>
  <style>
    input{
      margin-top: 2px;
    }
    .container {
      display: flex;
      flex-direction: row;
      align-items: center;
      align-items: left;
    }
    .container :first-child {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <h1>Login Page</h1>
  <p>Please enter your username and password!</p>
  <form action="loginChecker.php" method="post">
    <div class="container">
      <div>
        Username: <input type="text" name="username" id="i_username"> <br>
        Password: <input type="password" name="password" id="i_password">
      </div>
      <input type="submit" value="Login">
    </div>
  </form>
</body>
</html>