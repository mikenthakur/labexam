<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <main>
      <form action="inc/login.inc.php" method="post">
        <label for="username">Username</label>
        <input type="text" id ="username" name="username" placeholder="Enter username" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter passowrd" required><br><br>

        <input type="submit" name="submit" value="Login">

      </form>
    </main>
</body>
</html>