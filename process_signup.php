<?php
if (isset($_POST['signup'])) {
    include("db.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat-password'];

    // Basic validation
    if (empty($email) || empty($password) || empty($repeatPassword)) {
        header("Location: signup.php?error=emptyfields");
        exit();
    } elseif ($password !== $repeatPassword) {
        header("Location: signup.php?error=passwordmismatch");
        exit();
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create an XML string with user data
        $xmlString = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xmlString .= "<user>\n";
        $xmlString .= "    <email>{$email}</email>\n";
        // You can add more data elements as needed
        $xmlString .= "</user>";

        // Save the XML string to a file
        $xmlFileName = "user_data.xml";
        file_put_contents($xmlFileName, $xmlString);

        $stmt = $conn->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            // Log successful registration with username
            $logMessage = date("Y-m-d H:i:s") . " - Registration successful for user: " . $email . "\n";
            file_put_contents('log.txt', $logMessage, FILE_APPEND);
            header("Location: login.php?signup=success");
            exit();
        } else {
            header("Location: signup.php?error=databaseerror");
            exit();
        }

        $stmt->close();
        $conn->close();
    }
} else {
    // If the form was not submitted, redirect to the signup page
    header("Location: signup.php");
    exit();
}
?>
