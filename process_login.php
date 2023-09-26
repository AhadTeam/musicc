<?php
if (isset($_POST['login'])) {
    include("db.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation (you can add more validation as needed)
    if (empty($email) || empty($password)) {
        header("Location: login.php?error=emptyfields");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Create an XML string with user data
                $xmlString = "<?xml version='1.0' encoding='UTF-8'?>\n";
                $xmlString .= "<user>\n";
                $xmlString .= "    <id>{$user['id']}</id>\n";
                $xmlString .= "    <email>{$user['email']}</email>\n";
                // Add more data elements as needed
                $xmlString .= "</user>";

                // Save the XML string to a file
                $xmlFileName = "user_data.xml";
                file_put_contents($xmlFileName, $xmlString);

                // Log successful login with username
                $logMessage = date("Y-m-d H:i:s") . " - Login successful for user: " . $user['email'] . "\n";
                file_put_contents('log.txt', $logMessage, FILE_APPEND);
                header("Location: index.php");
                exit();
            } else {
                // Log failed login attempt with username
                $logMessage = date("Y-m-d H:i:s") . " - Login failed for user: " . $user['email'] . " (wrong password)\n";
                file_put_contents('log.txt', $logMessage, FILE_APPEND);
                header("Location: login.php?error=wrongpassword");
                exit();
            }
        } else {
            header("Location: login.php?error=nouser");
            exit();
        }
    }
} else {
    // If the form was not submitted, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
