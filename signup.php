<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signlog_styles.css">
</head>
<body class="futuristic-bg">
    <div class="container">
        <h1 class="futuristic-text">Sign Up</h1>
<?php
    // Check if there are any error messages from process_login.php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo '<p style="color: red;">Error: ' . $error . '</p>';
        
        // Write the error message to log.txt
        $logMessage = date("Y-m-d H:i:s") . " - Error: " . $error . "\n";
        file_put_contents('log.txt', $logMessage, FILE_APPEND);
    }
    ?>
        <form action="process_signup.php" method="POST" class="futuristic-form">
            <label for="email" class="futuristic-label">Email:</label>
            <input type="email" id="email" name="email" required class="futuristic-input"><br>

            <label for="password" class="futuristic-label">Password:</label>
            <input type="password" id="password" name="password" required class="futuristic-input"><br>

 	<label for="repeat-password" class="futuristic-label">Repeat Password:</label>
            <input type="password" id="repeat-password" name="repeat-password" required class="futuristic-input"><br>

            <button type="submit" name="signup" class="futuristic-button">Sign Up</button>
        </form>
    </div>
</body>
</html>

