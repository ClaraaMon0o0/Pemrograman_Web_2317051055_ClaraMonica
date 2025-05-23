<?php
 Session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form>
        <h1>Login</h1>
        <div>
            <label for="username"> Username: </label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password"> Password: </label>
            <input type="text" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>