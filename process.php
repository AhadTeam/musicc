<?php

include("db.php"); // Include the database connection

function createContactMessage($conn, $name, $email, $message) {
    try {
        $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        return true; // Message sent successfully
    } catch (PDOException $e) {
        return false; // Error occurred
    }
}


//try {
//    $stmt = $conn->prepare("SELECT * FROM contact");
//    $stmt->execute();
//    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    if (count($messages) > 0) {
//        foreach ($messages as $message) {
//            echo "Name: " . $message['name'] . "<br>";
//            echo "Email: " . $message['email'] . "<br>";
//            echo "Message: " . $message['message'] . "<br>";
//            echo "<hr>";
//        }
//    } else {
//        echo "No messages yet.";
//    }
//} catch (PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}

$conn = null; // Close the database connection
?>