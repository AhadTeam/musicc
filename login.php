<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/signlog_styles.css">
</head>
<body class="futuristic-bg">
    <div class="container">
        <h1 class="futuristic-text">Login</h1>
        <form action="process_login.php" method="POST" class="futuristic-form">
            <label for="username" class="futuristic-label">Username:</label>
            <input type="text" id="email" name="email" required class="futuristic-input"><br>

            <label for="password" class="futuristic-label">Password:</label>
            <input type="password" id="password" name="password" required class="futuristic-input"><br>

            <button type="submit" name="login" class="futuristic-button">Login</button>
        </form>
    </div>
</body>
</html>
